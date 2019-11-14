<?php

defined('BASEPATH') or exit('Access Denied');

class Posts extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        User::logged_in();
    }
        
    public function  index()
    {
       
        
    $this->load->module('layouts');
    $this->load->library('template');
    $data['datatable'] = TRUE;
    $this->template->title(' Photostock | ' . config_item('website_name'));
    $this->template->set_layout( 'users')->build('properties',isset($data) ? $data : NULL);
    } 
    
    public function categories()
    {
       
        if($this->input->post())
        {
             $this->form_validation->set_rules('category', 'Category Name', 'required');
        
        if ($this->form_validation->run() == FALSE)
        {
            
            redirect($_SERVER['HTTP_REFERER'],'error','form has errors');
        }else{
            if($this->input->post('mode')== "unchecked")
        {
            $mode_input = "off";
            
        } else {
            
            $mode_input = "on";
        }
            $slug = slugger($this->input->post('category', TRUE));
               if($this->App->_exist($slug,'categories')){
                   $message['exception'] = "Category Already Exists";
                $this->session->set_flashdata($message);
                   redirect($_SERVER['HTTP_REFERER']);
               } else{     $data = array(
                        'name'    => $this->input->post('category', TRUE),
                        'mode'    => $mode_input,
                        'slug'      => $slug
                        );
            if ($this->App->save('categories', $data)) {
                 $message['success'] = "New Category Added!!";
                $this->session->set_flashdata($message);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                /*set exception message*/
                $message['exception'] = "Please try again!"; 
                $this->session->set_flashdata($message);
                redirect($_SERVER['HTTP_REFERER']);
            }
                  
            }
        }
        } else
        {
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Categories | ' .$this->config->item('website_name'));$data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('cities',isset($data) ? $data : NULL);
        }
    }

    public function ban($id = null)
    {
        
    }
    
    public function edit($id = null)
    {
        
    }
    
public function approve($id = null)
{
    
}
     

}