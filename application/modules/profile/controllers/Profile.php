<?php 
defined('BASEPATH') or exit('Access Denied');

class Profile extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        User::logged_in();
    }
    
    public function  index($user)
    {       
    $data['user_id'] = App::getUserID($user);
    $user_id =$data['user_id']->id;
    $username = User::displayName($user_id);
    $data['categories'] = App::getData('categories',5,'name');
    $data['stock'] = App::getData('images');
    $this->load->module('layouts');
    $this->load->library('template');
        
    $this->template->title($username .' | ' .config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('profile',isset($data) ? $data : NULL);
    }
    public function account_settings()
    {
        
    }
    
    public function billing()
    {
        
    }
}