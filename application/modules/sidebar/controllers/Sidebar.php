<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sidebar extends MX_Controller {
	


	function __construct()
	{
		parent::__construct();
		$this->load->model(array('User','App'));
       // $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		//$this->output->set_header('Pragma: no-cache');	

	}
	public function admin_menu()
	{
		//$data['languages'] = App::languages();
        //$data['grades'] = App::get_details('grades');
        $this->load->view('admin_menu',isset($data) ? $data : NULL);
	}
	public function top_header()
	{
                $this->load->view('top_header',isset($data) ? $data : NULL);
	}
	
	public function scripts()
	{
		//$this->load->view('scripts/uni_scripts',isset($data) ? $data : NULL);
	}
	public function flash_msg()
	{
		$this->load->view('flash_msg',isset($data) ? $data : NULL);
	}
}
/* End of file sidebar.php */