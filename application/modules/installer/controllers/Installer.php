<?php

defined('BASEPATH') or exit('Access Denied');

class Installer extends MX_Controller
{
     public function __construct()
    {
        parent::__construct();

        if ($this->check_install() && ($this->uri->segment(1) != 'installer')) {
            redirect('');
        }

        $this->load->helper(array('url', 'file', 'curl'));
    }

    public function index()
    {
        $this->load->view('install');
    }

    public function check_install()
    {
        include APPPATH.'config/database.php';
        $host = $db['default']['hostname'];
        $username = $db['default']['username'];
        $pass = $db['default']['password'];
        $db_name = $db['default']['database'];

        return $this->verify_config($host, $username, $pass, $db_name);
    }

    public function installed()
    {
        $this->enable_system_access();
        $this->change_routing();
        redirect();
    }

    public function start()
    {
        $this->session->sess_destroy();
        redirect('installer/?step=2', 'refresh');
    }

    public function db_setup()
    {
        $db_connect = $this->verify_connection();

        if ($db_connect) {
            $create_config = $this->create_config();
            $this->initialize_db();

            $this->step_complete('database_setting', '3');

            redirect('installer/?step=3');
        } else {
            $this->session->set_flashdata('message', 'Database connection failed please try again.');
            redirect('installer/?step=2');
        }
    }
    
    public function portfalio_setup()
    {
      
        
    
        
        $this->create_portfolio();
        
        $this->step_complete('portfolio_settings','4');
        redirect('installer/?step=4');
        
    }
    
    public function complete()
    {
          $this->enable_system_access();
        $this->create_admin();

        $this->change_routing();

        $this->change_htaccess();

        $this->session->sess_destroy();

        redirect('installer/done');
    }

    public function done()
    {
        $this->load->view('congratulations');
    }

    public function step_complete($setting, $next_step)
    {
        $formdata = array(
            $setting => 'complete',
            'next_step' => $next_step,
        );

        return $this->session->set_userdata($formdata);
    }

    public function create_config()
    {
        // Replace the database settings
        $dbdata = read_file('./app/config/database.php');
        $dbdata = str_replace('db_name', $this->input->post('database'), $dbdata);
        $dbdata = str_replace('db_user', $this->input->post('username'), $dbdata);
        $dbdata = str_replace('db_pass', $this->input->post('password'), $dbdata);
        $dbdata = str_replace('db_host', $this->input->post('hostname'), $dbdata);
        write_file('./app/config/database.php', $dbdata);
      
    }
    //Creates Portfolio Settings
    
    public function create_portfolio()
    
    {
         $portfolio = $this->input->post('website_name');
        $portfolio_email = $this->input->post('email');
        $base_url = $this->input->post('base_url');
          $this->db->where('config_key', 'webmaster_email')->delete('config');
        // Prepare portfolio settings
        
       
         $codata = array('value' => $portfolio);
        $this->db->where('config_key', 'portfolio_name')->update('config', $codata);
        $codata = array('value' => $portfolio);
        $this->db->where('config_key', 'portfolio_legal_name')->update('config', $codata);
        $codata = array('value' => $portfolio.' Support');
        $this->db->where('config_key', 'support_email_name')->update('config', $codata);

        $codata = array('value' => $portfolio);
        $this->db->where('config_key', 'website_name')->update('config', $codata);
        
        $codata = array('value' => $portfolio_email);
        $this->db->where('config_key', 'mail_username')->update('config', $codata);
        
        $codata = array('value' => $portfolio_email);
        $this->db->where('config_key', 'smtp_user')->update('config', $codata);

        $codata = array('value' => $portfolio_email);
        $this->db->where('config_key', 'postmark_from_address')->update('config', $codata);

        $codata = array('value' => $portfolio_email);
        $this->db->where('config_key', 'support_email')->update('config', $codata);

        $codata = array('value' => $portfolio_email);
        $this->db->where('config_key', 'portfolio_email')->update('config', $codata);
        $codata = array('value' => $base_url);
        $this->db->where('config_key', 'portfolio_domain')->update('config', $codata);
        
        if (empty($_FILES['logo']['name'])){
			$this->form_validation->set_rules('logo', 'Picture', 'required');}
        
            $config['upload_path'] =  dirname($_SERVER["SCRIPT_FILENAME"])."/assets/images/";
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['overwrite'] = true;
            $config['max_size'] = 6000;
           
        
            $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('logo'))
        {
            $message['message'] = $this->upload->display_errors();
            $this->session->set_flashdata($message);
        }
        $file = array('upload_data'=>$this->upload->data());
        $logo = $file['upload_data']['file_name'];   
        $codata = array('value' => $logo);
        $this->db->where('config_key', 'portfolio_logo')->update('config', $codata);
       
       
        	$data = array(
			'portfolio_website' => $base_url,
			'portfolio_name' => $portfolio,
			'portfolio_email' => $portfolio_email,
			);

			$this->db->insert('settings',$data);
			return $this-> db -> insert_id();
      
    }
    
    // Creates admin account
    public function create_admin()
    {
        $this->load->library('tank_auth');
        $this->db->truncate('users');
        $this->db->truncate('user_account');

        // Prepare admin account settings
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email_activation = false;
        
        
        return $this->tank_auth->create_user(
            $username,
            $email,
            $password,
            $firstname,
            $lastname,
            '1',
            '',
            $email_activation
        );
    }

    public function initialize_db($version = null)
    {
        // Run the installer sql schema
        $this->load->database();

        $templine = '';
        // Read in entire file
        $lines = file('./assets/tmp/database.sql');
        foreach ($lines as $line) {
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            $templine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                $this->db->query($templine) or print 'Error performing query \'<strong>'.$templine.'\': '.mysql_error().'<br /><br />';
                $templine = '';
            }
        }

        return true;
    }

    public function enable_system_access()
    {
        $confdata = read_file('./app/config/config.php');
        $confdata = str_replace(
            '$config[\'enable_hooks\'] = FALSE;',
            '$config[\'enable_hooks\'] = TRUE;',
            $confdata);
        $confdata = str_replace(
            '$config[\'index_page\'] = \'index.php\';',
            '$config[\'index_page\'] = \'\';',
            $confdata);
        $confdata = str_replace(
            '$config[\'sess_driver\'] = \'files\';',
            '$config[\'sess_driver\'] = \'database\';',
            $confdata);
        $confdata = str_replace(
            '$config[\'sess_save_path\'] = FCPATH.\'assets/tmp/\';',
            '$config[\'sess_save_path\'] = \'un_sessions\';',
            $confdata);

        write_file('./app/config/config.php', $confdata);

        $libdata = read_file('./app/config/autoload.php');
        $libdata = str_replace(
            '$autoload[\'libraries\'] = array(\'session\');',
            '$autoload[\'libraries\'] = array(\'session\',\'database\',\'tank_auth\',\'applib\');',
            $libdata);
        write_file('./app/config/autoload.php', $libdata);
    }

    public function change_routing()
    {
        // Replace the default routing controller
        $rdata = read_file('./app/config/routes.php');
        $rdata = str_replace('installer', 'front', $rdata);
        write_file('./app/config/routes.php', $rdata);

        $data = 'Software installed';
        if (write_file('./assets/tmp/installed.txt', $data)) {
            return true;
        }
    }

    public function change_htaccess()
    {
        $subfolder = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        if (!empty($subfolder)) {
            $input = '<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase '.$subfolder.'
RewriteCond %{REQUEST_URI} ^system.*
RewriteRule ^(.*)$ /index.php?/$1 [L]

RewriteCond %{REQUEST_URI} ^app.*
RewriteRule ^(.*)$ /index.php?/$1 [L]

RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L]
</IfModule>

<IfModule !mod_rewrite.c>
ErrorDocument 404 /index.php
</IfModule>';

            $current = @file_put_contents('./.htaccess', $input);
        }
    }

    // -------------------------------------------------------------------------------------------------

    /*
     * Database validation check from user input settings
     */
    public function verify_connection()
    {
        $link = @mysqli_connect(
            $this->input->post('db_host'),
            $this->input->post('db_user'),
            $this->input->post('db_pass'),
            $this->input->post('db_name')
        );
        if (!$link) {
            @mysqli_close($link);

            return false;
        }

        @mysqli_close($link);

        return true;
    }

    // -------------------------------------------------------------------------------------------------

    /*
     * Database check connection
     */
    public function verify_config($host, $user, $pass, $database)
    {
        $link = @mysqli_connect(
            $host,
            $user,
            $pass,
            $database
        );
        if (!$link) {
            @mysqli_close($link);

            return false;
        }

        @mysqli_close($link);

        return true;
    }
}