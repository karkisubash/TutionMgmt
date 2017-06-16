<?php 

class direct extends CI_CONTROLLER
{
	public function register()
	{
		$this->load->view('Register');
	}

	public function index()
	{
		$this->load->view('main');
	}

	public function login()
	{
		$this->load->view('LOGIN');
	}

	public function admindashboard()
	{
		$this->load->view('adminDashboard');
	}

	public function contact()
	{
		$this->load->view('contact');
	}


}

?>