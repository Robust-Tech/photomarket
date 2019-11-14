<?php

defined('BASEPATH') or exit('Access Denied');

class Home extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function  index()
    {        
    $data['categories'] = App::getData('categories',5,'name');
    $data['stock'] = App::getData('stock');
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title(config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('front',isset($data) ? $data : NULL);
    }
    public function collections()
    {
        $data['categories'] =App::getData('categories',5,'name');
        $data['collections'] = App::getData('collections');
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Collections -'.config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('collections',isset($data) ? $data : NULL); 
    }
    public function post($slug)
    {
    $data['post_categories'] =App::categories('name');
    $data['categories'] =App::getData('categories',5,'name');

    $data['post'] =  App::get_post_by_slug($slug);

    $data['title'] = $data["post"]->title;
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title($data["post"]->title. ' | '.config_item('website_name'));
    
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('post',isset($data) ? $data : NULL);
    }
    public function post_categories($slug)
    {
    $data['post_categories'] =App::categories('name');
    $data['categories'] =App::getData('categories',5,'name');

    $data['post'] =  App::get_category_by_slug($slug);
$data['data'] = App::get_post_by_cat_id($data["post"]->id);
    $data['title'] = $data["post"]->name;
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title($data["post"]->name. ' | '.config_item('website_name'));
    
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('cat_posts',isset($data) ? $data : NULL);
    }
    public function featured()
    {
        $data['categories'] =App::getData('categories',5,'name');
        
    }
        public function tags()
    {
            $data['categories'] =App::getData('categories',5,'name');
               $data['data'] = App::getData('images');
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Collections -'.config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('tags',isset($data) ? $data : NULL); 
    }
        public function packages()
    {
    $data['categories'] =App::getData('categories',5,'name');
    $data['prices'] = App::getData('pricing');
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Pricing -'.config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('pricing',isset($data) ? $data : NULL); 
    }
    
    public function category($slug)
    {
        $data['categories'] =App::getData('categories',5,'name');


    $data['category'] =  App::get_category_by_slug($slug);
    if (empty($data['category'])) {
            redirect($_SERVER['HTTP_REFERER']);
        }
    $data['title'] = $data["category"]->name;
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title($data["category"]->name. ' | '.config_item('website_name'));
    
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('category',isset($data) ? $data : NULL);
    }
        public function page()
    {
        $data['categories'] =App::getData('categories',5,'name');
    }
        public function blog()
    {
        $data['categories'] =App::getData('categories',5,'name');
        $data['post_categories'] =App::categories('name');
            $data['data'] = App::getData('blog');
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('News Room -'.config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('blog',isset($data) ? $data : NULL); 
    }
        public function login()
    {
        $data['categories'] =App::getData('categories',5,'name');
        if ($this->tank_auth->is_logged_in()) {     // logged in
            redirect('');
        } elseif ($this->tank_auth->is_logged_in(FALSE)) {  // logged in, not activated
            redirect('/auth/send_again/');

        } else {
            $data['login_by_username'] = (config_item('login_by_username') AND
                config_item('use_username'));
            $data['login_by_email'] = config_item('login_by_email');

            $this->form_validation->set_rules('login', 'Login', 'trim|required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');

            // Get login for counting attempts to login
            if (config_item('login_count_attempts') AND
                ($login = $this->input->post('login'))) {
                $login = $this->security->xss_clean($login);
            } else {
                $login = '';
            }

            $data['use_recaptcha'] = (config_item('use_recaptcha') == 'TRUE') ? TRUE : FALSE;
            if ($this->tank_auth->is_max_login_attempts_exceeded($login) || config_item('captcha_login') == 'TRUE') {
                if ($data['use_recaptcha'])
                    $this->form_validation->set_rules('g-recaptcha-response', 'Confirmation Code', 'trim|xss_clean|required|callback__check_recaptcha');
                else
                    $this->form_validation->set_rules('captcha', 'Confirmation Code', 'trim|xss_clean|required|callback__check_captcha');
            }
            $data['errors'] = array();

            if ($this->form_validation->run($this)) {								// validation ok
                if ($this->tank_auth->login(
                    $this->form_validation->set_value('login'),
                    $this->form_validation->set_value('password'),
                    $this->form_validation->set_value('remember'),
                    $data['login_by_username'],
                    $data['login_by_email'])) {								// success
                    redirect($this->session->userdata('requested_page'));

                } else {
                    $errors = $this->tank_auth->get_error_message();
                    if (isset($errors['banned'])) {
                        $this->session->set_flashdata('message',$this->lang->line('auth_message_banned').' '.$errors['banned']);	// banned user
                        //$this->_show_message();
                        redirect('login');

                    } elseif (isset($errors['not_activated'])) {				// not activated user
                        redirect('/auth/send_again/');

                    } else {													// fail
                        foreach ($errors as $k => $v) { $data['errors'][$k] = $this->lang->line($v); }
                    }
                }
            }



            $data['show_captcha'] = FALSE;
            if(config_item('captcha_login') == 'TRUE'){
                $data['show_captcha'] = TRUE;
                if ($data['use_recaptcha']) {
                    // $data['recaptcha_html'] = $this->_create_recaptcha();
                } else {
                    $data['captcha_html'] = $this->_create_captcha();
                }
            }

            if ($this->tank_auth->is_max_login_attempts_exceeded($login)) {
                $data['show_captcha'] = TRUE;
            }
            $this->load->module('layouts');
            $this->load->library('Template');
            $this->template->title('Log In'.' | '.config_item('website_name'));
            $data['ref_item'] = $this->input->get('r_url', TRUE) ? $this->input->get('r_url', TRUE) : NULL;
            $this->template
                ->set_layout(config_item('theme') .'/'.'home')
                ->build('login',isset($data) ? $data : NULL);
        }
    }
    
    
}