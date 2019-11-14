<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pricing extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
          User::logged_in();
        if(!User::is_superadmin())
        {
            redirect(base_url('/'));
        }
	}
	
	public function index(){
                if ($this->input->post()) {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');   
        $this->form_validation->set_rules('num_imgs', 'Number Of Images / Assets', 'required');   
        $this->form_validation->set_rules('price', 'Price', 'required');   
        $this->form_validation->set_rules('planType', 'Plan Type', 'required');   
        if ($this->form_validation->run() == TRUE)
        {
             $data = array(
                        'name'    => $this->input->post('title', TRUE),
                        'content'   => $this->input->post('content', TRUE),
                        'num_of_pictures'   => $this->input->post('num_imgs', TRUE),
                        'price'   => $this->input->post('price', TRUE),
                        'planType'   => $this->input->post('planType', TRUE),
                        
                        );
            if ($this->App->save('pricing', $data)) {
                 $message['exception'] = "New Pricing Package Added!!";
                $this->session->set_flashdata($message);
                 redirect($_SERVER['HTTP_REFERER']);
            } else {
                /*set exception message*/
                $message['exception'] = "Please try again!"; 
                $this->session->set_flashdata($message);
                redirect($_SERVER['HTTP_REFERER']);
            }
        }else{
                   
            $message['exception'] = validation_errors();
            $this->session->set_flashdata($message);
            redirect($_SERVER['HTTP_REFERER']);
            }
                }else {  
		    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Pricing Packages | ' .$this->config->item('website_name'));
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('pricing',isset($data) ? $data : NULL);
	}
	}
     public function edit($id =  null)
    {
        if ($this->input->post()) {
         
     
              $data = array(
                       'title'    => $this->input->post('title', TRUE),
                        'content'   => $this->input->post('content', TRUE),
                        'num_of_pictures'   => $this->input->post('num_imgs', TRUE),
                        'price'   => $this->input->post('price', TRUE),
                        );
             $id = $this->input->post('id', TRUE);
            App::update_data('pricing',$id, $data);
            $this->session->set_flashdata('response_status', 'success');
            $this->session->set_flashdata('message', 'Page updated');
            redirect('pages'); 
            
        } else {
    $data['id'] =  $id;
    $data['datatable'] = true;   
    $data['table'] =  'pricing'; 
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Edit Pricing Packages | ' .$this->config->item('website_name'));
    $this->template
					->set_layout('users')
					->build('modal/edit',isset($data) ? $data : NULL);
        }
    
    }
	
}

