<?php

defined('BASEPATH') or exit('Access Denied');

class Settings extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        User::logged_in();
        if(!User::is_superadmin())
        {
            redirect(base_url('/'));
        }
    }
    
        public function index()
    {
    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Settings | ' .$this->config->item('website_name'));
    $this->template
					->set_layout('users')
					->build('settings');
    }
    public function update()
    {
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('company_domain', 'Company Domain', 'required');
        $this->form_validation->set_rules('website_name', 'Website Name', 'required');
        $this->form_validation->set_rules('site_desc', 'Website Description', 'required');
        $this->form_validation->set_rules('keywords', 'Website Keywords', 'required');
        $this->form_validation->set_rules('company_email', 'System Email', 'required');
        $company = $this->input->post('website_name');
        $company_name= $this->input->post('company_name');
        $site_desc = $this->input->post('site_desc');
        $base_url = $this->input->post('company_domain');
        $keywords = $this->input->post('keywords');
        $company_email = $this->input->post('company_email');
        $codata = array('value' => $company_name);
        $this->db->where('config_key', 'company_name')->update('config', $codata);
        $codata = array('value' => $company_name);
        $this->db->where('config_key', 'company_legal_name')->update('config', $codata);
        $codata = array('value' => $company_name.' Support');
        $this->db->where('config_key', 'support_email_name')->update('config', $codata);

        $codata = array('value' => $company);
        $this->db->where('config_key', 'website_name')->update('config', $codata);
        
        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'mail_username')->update('config', $codata);
        
        $codata = array('value' => $keywords);
        $this->db->where('config_key', 'keywords')->update('config', $codata);

        $codata = array('value' => $site_desc);
        $this->db->where('config_key', 'site_desc')->update('config', $codata);

        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'support_email')->update('config', $codata);

        $codata = array('value' => $company_email);
        $this->db->where('config_key', 'company_email')->update('config', $codata);
        $codata = array('value' => $base_url);
        $this->db->where('config_key', 'company_domain')->update('config', $codata);
        
        if (empty($_FILES['logo']['name'])){
			$this->form_validation->set_rules('logo', 'Picture', 'required');}
        
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
       
            
            $this->session->set_flashdata('response_status', 'success');
            $this->session->set_flashdata('message', lang('settings_updated_successfully'));
            redirect('settings/');
        
    }
    public function website()
    {
        if ($this->input->post()) {
  
        $welcome_subtitle = $this->input->post('welcome_subtitle');
        $welcome_text= $this->input->post('welcome_text');
        $upload_limit = $this->input->post('upload_limit');
        $tags_limit = $this->input->post('tags_limit');
        $google_analytics = $this->input->post('google_analytics');
        $file_size_allowed = $this->input->post('file_size_allowed');
        $description = $this->input->post('description');
       
            $codata = array('value' => $welcome_subtitle);
        $this->db->where('config_key', 'welcome_subtitle')->update('config', $codata);
        $codata = array('value' => $welcome_text);
        $this->db->where('config_key', 'welcome_text')->update('config', $codata);
        $codata = array('value' => $tags_limit);
        $this->db->where('config_key', 'tags_limit')->update('config', $codata);

        $codata = array('value' => $file_size_allowed);
        $this->db->where('config_key', 'file_size_allowed')->update('config', $codata);
        
        $codata = array('value' => $upload_limit);
        $this->db->where('config_key', 'upload_limit')->update('config', $codata);
        
        $codata = array('value' => $google_analytics);
        $this->db->where('config_key', 'google_analytics')->update('config', $codata); 
            $codata = array('value' => $description);
        $this->db->where('config_key', 'description')->update('config', $codata);
        redirect($_SERVER['HTTP_REFERER']);
        }else {  
		    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Website Settings | ' .$this->config->item('website_name'));
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('web_settings',isset($data) ? $data : NULL);
	}
    }
   public function payments()
    {
        if ($this->input->post()) {
  
        $paypal_id = $this->input->post('paypal_id');
        $currency= $this->input->post('paypal_currency');
        $paypal_enabled = $this->input->post('sandbox');
            $codata = array('value' => $paypal_id);
        $this->db->where('config_key', 'paypal_email')->update('config', $codata);
        $codata = array('value' => $currency);
        $this->db->where('config_key', 'paypal_currency')->update('config', $codata);
        $codata = array('value' => $paypal_enabled);
        $this->db->where('config_key', 'paypal_enabled')->update('config', $codata);

        redirect($_SERVER['HTTP_REFERER']);
        }else {  
		    $this->load->module('layouts');
    $this->load->library('template');
    $this->template->title('Payment Settings | ' .$this->config->item('website_name'));
    $data['datatable'] = true;
    $this->template
					->set_layout('users')
					->build('payment_settings',isset($data) ? $data : NULL);
	}
    }
    
}