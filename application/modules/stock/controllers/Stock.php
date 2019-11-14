<?php 
defined('BASEPATH') or exit('Access Denied');

class Stock extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        User::logged_in();

    }
    
    public function  index()
    { 
               if(!User::is_contributor())
       {
           redirect('/');
       } 
        if($this->input->post())
        {
            if (empty($_FILES['picture']['name'])){
			$this->form_validation->set_rules('picture', 'Picture', 'required');}
            $config['upload_path'] =  dirname($_SERVER["SCRIPT_FILENAME"])."/assets/stock/";
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
        if ($this->form_validation->run() == TRUE)
        {
            $slug = slugger($this->input->post('title', TRUE));
               if($this->App->_exist($slug,'stock')){
                   $message['exception'] = "Stock Asset Already Exists";
                $this->session->set_flashdata($message);
                   redirect($_SERVER['HTTP_REFERER']);
               } else{     $data = array(
                        'title'    => $this->input->post('title', TRUE),
                        'description'    => $this->input->post('description', TRUE),
                        'cat_id'    => $this->input->post('cat', TRUE),
                        'token_id'    =>  $this->randStrGen(4, 7),
                        'slug'      => $slug,
                        'post_img'      => $picture,
                   'user_id'      => User::get_id(),
                        'created_at'       => date('Y-m-d')
                        );
            if ($this->App->save('stock', $data)) {
                 $message['success'] = "Asset successfully added!!";
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
        }
        else
        {
    $data['categories'] = App::getData('categories',5,'name');
    $this->load->module('layouts');
    $this->load->library('template');
        
    $this->template->title(' upload | ' .config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'upload')
					->build('upload',isset($data) ? $data : NULL);  
        }

    }
    public function view($slug)
    {
        
    $data['categories'] = App::getData('categories',5,'name');
    $data['stock'] = App::get_project_by_slug($slug);
    $data['title'] = $data['stock']->title ;
    $this->load->module('layouts');
    $this->load->library('template');
        
    $this->template->title( $data['stock']->title .' | ' .config_item('website_name'));
    $this->template
					->set_layout(config_item('theme') .'/'. 'home')
					->build('view',isset($data) ? $data : NULL);  
    }
    public function randStrGen($mode = null, $len = null)
    {
        $result = "";
        if($mode == 1):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        elseif($mode == 2):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        elseif($mode == 3):
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        elseif($mode == 4):
            $chars = "0123456789";
        endif;

        $charArray = str_split($chars);
        for($i = 0; $i < $len; $i++) {
                $randItem = array_rand($charArray);
                $result .="".$charArray[$randItem];
        }
        return $result;
    }
}