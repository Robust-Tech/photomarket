<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pages extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
          User::logged_in();
        if(!User::is_superadmin())
        {
            redirect(base_url('/'));
        }
	}
	
	public function index(){
		    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Pages | ' .$this->config->item('website_name'));
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('pages',isset($data) ? $data : NULL);
	}
    public function create(){
        if ($this->input->post()) {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');   
        if ($this->form_validation->run() == TRUE)
        {
             $data = array(
                        'title'    => $this->input->post('title', TRUE),
                        'content'   => $this->input->post('content', TRUE),
                        'slug'      => slugger($this->input->post('title', TRUE)),
                        );
            if ($this->App->save('pages', $data)) {
                 $message['exception'] = "New Page Added!!";
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
                } else {  
        $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Add New Page | ' .$this->config->item('website_name'));
    $data['datatable'] = false;
    $this->template
					->set_layout('users')
					->build('add',isset($data) ? $data : NULL);
    }
		    
	}
     public function edit($id =  null)
    {
        if ($this->input->post()) {
         
     
              $data = array(
                        'title'    => $this->input->post('title', TRUE),
                        'content'   => $this->input->post('content', TRUE),
                        'slug'      => $this->input->post('slug', TRUE),
                        );
             $id = $this->input->post('id', TRUE);
            App::update_data('pages',$id, $data);
            $this->session->set_flashdata('response_status', 'success');
            $this->session->set_flashdata('message', 'Page updated');
            redirect('pages'); 
            
        } else {
    $data['id'] =  $id;
    $data['datatable'] = true;   
    $data['table'] =  'pages'; 
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Edit Page | ' .$this->config->item('website_name'));
    $this->template
					->set_layout('users')
					->build('modal/edit',isset($data) ? $data : NULL);
        }
    
    }
	
}

