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
		$this->load->view('loginoption');
	}

	public function studentlogin()
	{
		$this->load->view('studentlogin');
	}

	public function teacherlogin()
	{
		$this->load->view('teacherlogin');
	}

	public function adminlogin()
	{
		$this->load->view('adminlogin');
	}

	public function adminDashboard()
	{
		$this->load->view('adminDashboard');
	}

	public function studentdashboard()
	{
		$this->load->view('studentdashboard');
	}

	public function teacherdashboard()
	{
		$this->load->view('teacherdashboard');
	}

	public function student()
	{
		$this->load->view('student');
	}

	public function teacher()
	{
		$this->load->view('teacher');
	}

	public function course()
	{
		$this->load->view('course');
	}

	public function admission()
	{
		$this->load->view('admission');
	}

	public function viewStudent()
	{
		$this->load->view('viewdetails');
	}	

	public function attendance()
	{
		$this->load->view('attendance');
	}	

	public function contact()
	{
		$this->load->view('contact');
	}

	public function eventUpdate()
	{
		$this->load->view('eventUpdate');
	}

	public function courseAdd()
	{
		$this->load->view('addCourse');
	}

	public function studentSupdate()
	{
		$this->load->view('studentSupdate');
	}

	public function exam()
	{
		$this->load->view('exam');
	}

	public function upload()
	{
		$this->load->view('upload');
	}


}

?>