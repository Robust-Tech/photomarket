<?php

defined('BASEPATH') or exit('Access Denied');

class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function  index()
    {
        $view = null;
        if(User::is_superadmin())
        {
            $view = 'main';
        } elseif(User::is_staff())
        {
            $view = 'auth';
        } elseif(User::is_admin())
        {
            $view = 'admin';
        } else
        {
            redirect();
        }
        
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title(config_item('website_name'));
    $this->template->set_layout( 'users')->build($view,isset($data) ? $data : NULL);
    } 
}