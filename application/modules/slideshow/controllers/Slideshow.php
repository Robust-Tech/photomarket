<?php

defined('BASEPATH') or exit('Access Denied');

class Slideshow extends MX_Controller
{
    public function __contruct()
    {
        parent::__construct();
        User::logged_in();
        
    }
    
    public function index()
    {
        
              if ($this->input->post()) {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
   
   
            
        if (empty($_FILES['picture']['name'])){
			$this->form_validation->set_rules('picture', 'Picture', 'required');}
            $config['upload_path'] =  dirname($_SERVER["SCRIPT_FILENAME"])."/assets/sliders/";
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['overwrite'] = true;
            $config['max_size'] = 6000;
           
        
            $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('picture'))
        {
            $message['message'] = $this->upload->display_errors();
            $this->session->set_flashdata($message);
        }
        $file = array('upload_data'=>$this->upload->data());
        $picture = $file['upload_data']['file_name'];    
            
            
        if ($this->form_validation->run() == TRUE)
        {
             $data = array(
                        'title'    => $this->input->post('title', TRUE),
                        'content'   => $this->input->post('content', TRUE),
                        'slug'      => slugger($this->input->post('title', TRUE)),
                        'picture'         => $picture
                        );
            if ($this->App->save('sliders', $data)) {
                 $message['exception'] = "New Record Added!!";
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
    $this->template->title('Homepage Sliders | ' .$this->config->item('website_name'));
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('sliders',isset($data) ? $data : NULL);
    }
        
    }
    
    public function edit($id)
    {
        if($this->input->post())
        {
            
        } else 
        {
            $data['id'] = $id;
            $this->load->view('modal/edit',isset($data) ? $data : NULL);
        }
    }
}