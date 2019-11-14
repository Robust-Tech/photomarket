<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}


class Installer extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->_check_install() && ($this->uri->segment(1) != 'installer')) {
            redirect('');
        }

        $this->load->helper(array('url', 'file', 'curl'));
    }

    public function index()
    {
        $this->load->view('install');
    }

    public function _check_install()
    {
        include APPPATH.'config/database.php';
        $host = $db['default']['hostname'];
        $username = $db['default']['username'];
        $pass = $db['default']['password'];
        $db_name = $db['default']['database'];

        return $this->_verify_db_config($host, $username, $pass, $db_name);
    }

    public function _installed()
    {
        $this->_enable_system_access();
        $this->_change_routing();
        redirect();
    }

    public function start()
    {
        $this->session->sess_destroy();
        redirect('installer/?step=2', 'refresh');
    }

    public function db_setup()
    {
        $db_connect = $this->verify_db_connection();

        if ($db_connect) {
            $create_config = $this->_create_db_config();

            $this->_step_complete('database_setting', '3');
            
            $this->_initialize_db();
            
            redirect('installer/?step=3');
        } else {
            $this->session->set_flashdata('message', 'Database connection failed please try again.');
            redirect('installer/?step=2');
        }
    }

    public function complete()
    {
        

        $this->_create_admin_account();
        
        $this->_enable_system_access();
        
        $this->_change_routing();

        $this->_change_htaccess();

        $this->session->sess_destroy();

        if (is_file('./resource/tmp/install.sql')) {
            unlink('./resource/tmp/install.sql');
        }
        redirect('installer/done');
    }

    public function done()
    {
        $this->load->view('congratulations');
    }

    public function _step_complete($setting, $next_step)
    {
        $formdata = array(
            $setting => 'complete',
            'next_step' => $next_step,
        );

        return $this->session->set_userdata($formdata);
    }

    public function _create_db_config()
    {
        // Replace the database settings
        $dbdata = read_file('./application/config/database.php');
        $dbdata = str_replace('db_name', $this->input->post('set_database'), $dbdata);
        $dbdata = str_replace('db_user', $this->input->post('set_db_user'), $dbdata);
        $dbdata = str_replace('db_pass', $this->input->post('set_db_pass'), $dbdata);
        $dbdata = str_replace('db_host', $this->input->post('set_hostname'), $dbdata);
        write_file('./application/config/database.php', $dbdata);
    }
   
    public function _create_admin_account()
    {
        $this->load->library('tank_auth');
        $this->db->truncate('users');
        $this->db->truncate('account_details');
        $this->db->where('config_key', 'webmaster_email')->delete('config');

        // Prepare system settings
        $username = $this->input->post('set_admin_username');
        $email = $this->input->post('set_admin_email');
        $password = $this->input->post('set_admin_pass');
        $firstname = $this->input->post('set_admin_firstname');
        $lastname = $this->input->post('set_admin_lastname');
        $company = $this->input->post('set_company_name');
        $company_email = $this->input->post('set_company_email');
        $email_activation = false;
        
        $fullname = $firstname . ' ' . $lastname;
        
        $base_url = $this->input->post('set_base_url');
       
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
        $this->db->where('config_key', 'company_logo')->update('config', $codata);

        $codata = array('value' => $company);
        $this->db->where('config_key', 'company_name')->update('config', $codata);

        $codata = array('value' => $company);
        $this->db->where('config_key', 'company_legal_name')->update('config', $codata);

        $codata = array('value' => $company.' Support');
        $this->db->where('config_key', 'support_email_name')->update('config', $codata);

        $codata = array('value' => $company);
        $this->db->where('config_key', 'website_name')->update('config', $codata);

        $codata = array('value' => $fullname);
        $this->db->where('config_key', 'contact_person')->update('config', $codata);

        $codata = array('value' => $username);
        $this->db->where('config_key', 'mail_username')->update('config', $codata);



        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'smtp_user')->update('config', $codata);

        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'postmark_from_address')->update('config', $codata);

        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'support_email')->update('config', $codata);


        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'company_email')->update('config', $codata);

        $codata = array('value' => $base_url);
        $this->db->where('config_key', 'company_domain')->update('config', $codata);

        return $this->tank_auth->admin_create_user(
            $username,
            $email,
            $password,
            $firstname,
            $lastname,
            '1',
            '-',
            $email_activation
        );
    }

    public function _initialize_db($version = null)
    {
        // Run the installer sql schema
        $this->load->database();

        $templine = '';
        // Read in entire file
        $lines = file('./resource/tmp/install.sql');
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

    public function _enable_system_access()
    {
        $confdata = read_file('./application/config/config.php');
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
            '$config[\'sess_save_path\'] = FCPATH.\'resource/tmp/\';',
            '$config[\'sess_save_path\'] = \'un_sessions\';',
            $confdata);

        write_file('./application/config/config.php', $confdata);

        $libdata = read_file('./application/config/autoload.php');
        $libdata = str_replace(
            '$autoload[\'libraries\'] = array(\'session\');',
            '$autoload[\'libraries\'] = array(\'session\',\'database\',\'tank_auth\',\'applib\');',
            $libdata);
        write_file('./application/config/autoload.php', $libdata);
    }

    public function _change_routing()
    {
        // Replace the default routing controller
        $rdata = read_file('./application/config/routes.php');
        $rdata = str_replace('installer', 'home', $rdata);
        write_file('./application/config/routes.php', $rdata);

        $data = 'Software installed';
        if (write_file('./resource/tmp/installed.txt', $data)) {
            return true;
        }
    }

    public function _change_htaccess()
    {
        $subfolder = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
        if (!empty($subfolder)) {
            $input = '<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase '.$subfolder.'
RewriteCond %{REQUEST_URI} ^system.*
RewriteRule ^(.*)$ /index.php?/$1 [L]

RewriteCond %{REQUEST_URI} ^application.*
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
    public function verify_db_connection()
    {
        $link = @mysqli_connect(
            $this->input->post('set_hostname'),
            $this->input->post('set_db_user'),
            $this->input->post('set_db_pass'),
            $this->input->post('set_database')
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
    public function _verify_db_config($host, $user, $pass, $database)
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

/* End of file installer.php */
