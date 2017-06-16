<?php

//session_start(); //starting session in order to access it through CI
class MainControl extends CI_Controller{
	public function index(){

		$this->load->view('main');
	}
	public function register(){
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$uname=$this->input->post('uname');
		$pword=$this->input->post('pword');

		$this->load->model('mainModel');
		$this->mainModel->insertRegister($fname,$lname,$address,$contact,$email,$uname,$pword);

		$this->load->view('main');
	}

	public function login_validation(){

		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('uname','Username','required|alpha');
		// $this->form_validation->set_rules('pword','Password','required');
		// $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		// if($this->form_validation->run())
		// {
			//true
			$username=$this->input->post('username');
			$password=$this->input->post('pwd');
			print_r($username);
			die();
			$this->load->model('mainModel');

			$login_id=$this->mainModel->valid_login($username,$password);
				print_r($login_id);
				die();
			
		if($login_id->num_rows() > 0 )
		{
			foreach ($login_id->result() as $row {
			
			echo $row->id;
				 
			//return true;
			}
			

		} 
		
			// if($login_id) 
			// {
			// 	if($login_id=='1'){
				
			// 		$this->load->view('adminDashboard');
					
			// 	}else{
				
			// 	$this->load->library('session');

			// 	$this->session->set_userdata('user_id', $login_id);
			// 	$this->session->set_userdata('uname', $username);
				
			// 	$this->load->view('studentdashboard');
				
			// 	//++echo 'password match';
			
			// }
			// }else{
			// 	echo 'login fail';
			// }
	// 	}
	// }

	// public function logout()
	// {
	// 	$this->session->unset_userdata('username');
	// 	redirect(base_url().'direct/login');

	// }
}
	public function getData(){
		$id=2;
		$this->load->model('mainModel');
		$this->mainModel->retrive($id);
		$result=$this->mainModel->retrive($id);

			$data['show']=$result;
			$this->load->view('login',$data);


	}
}


?>