<?php
defined('BASEPATH') or exit('Access Denied');

class Blog extends MX_Controller
{
    public function __construct()
    {
        parent::__Construct();
        User::logged_in();
        if(!User::is_superadmin())
        {
            redirect(base_url('login'));
        }
    }
    
    public function index()
    {
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title(' News Room | ' .$this->config->item('website_name'));
$data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('posts',isset($data) ? $data : NULL);
    }
    public function create(){
        if ($this->input->post()) {
 if (empty($_FILES['picture']['name'])){
			$this->form_validation->set_rules('picture', 'Picture', 'required');}
            $config['upload_path'] =  dirname($_SERVER["SCRIPT_FILENAME"])."/assets/posts/";
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
        $this->form_validation->set_rules('title', 'Title', 'required');
         $this->form_validation->set_rules('cat', 'Category', 'required');   
        $this->form_validation->set_rules('content', 'content', 'required');   
        if ($this->form_validation->run() == TRUE)
        {
            $slug = slugger($this->input->post('title', TRUE));
               if($this->App->_exist($slug,'blog')){
                   $message['exception'] = "Blog Post Already Exists";
                $this->session->set_flashdata($message);
                   redirect($_SERVER['HTTP_REFERER']);
               } else{     $data = array(
                        'title'    => $this->input->post('title', TRUE),
                        'post_content'    => $this->input->post('content', TRUE),
                        'cat_id'    => $this->input->post('cat', TRUE),
                        'post_status'    => $this->input->post('post_status', TRUE),
                        
                        'slug'      => $slug,
                        'post_img'      => $picture,
                   'author_id'      => User::get_id(),
                        'created_at'       => date('Y-m-d')
                        );
            if ($this->App->save('blog', $data)) {
                 $message['success'] = "New Blog Post Added!!";
                $this->session->set_flashdata($message);
                redirect($_SERVER['HTTP_REFERER']);
            } else {
                /*set exception message*/
                $message['exception'] = "Please try again!"; 
                $this->session->set_flashdata($message);
                redirect($_SERVER['HTTP_REFERER']);
            }
                  
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
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('modal/add',isset($data) ? $data : NULL);
    }
		    
	}
    
}