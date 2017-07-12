<?php 

class studentFunctions extends CI_Controller{

	public function student_login(){ //login for student
			
			$uname=$this->input->post('uname');
			$pword=md5($this->input->post('pword'));
			
			$this->load->model('studentModel');

			$log_id=$this->studentModel->check_login($uname,$pword);
			If($log_id){
				$this->load->library('session');//loading session
				$this->session->set_userdata('sess_id',$log_id);//setting data in session extrated from teh database
				$this->session->set_userdata('sess_uname',$uname);

				$this->load->view('studentdashboard');//redirecting to studentdashboard

			}else{
 				echo ("Username or Password Error");//error
 			}
			
		 } 

		 public function logout()
		{
		$this->session->unset_userdata('sess_id');
	
		$this->load->view('studentlogin');
		}

 		public function studentView(){//displays student in the update form

 		$session=$this->session->userdata('sess_id');//setting the user session
		if ($session!=''){
			$this->load->model('studentModel');
			$profile=$this->studentModel->showStudent($session);
			$this->load->view('studentSupdate',['profile'=>$profile]);
			
		}else{
			$this->load->view('studentlogin');
		}
	}

	public function studentModify(){//student update their personal profile
		//getting data from the input of user in textfield of the form
		$sid=$this->input->post('sid');
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$contact=$this->input->post('contact');
		$address=$this->input->post('location');
		$email=$this->input->post('email');
		$uname=$this->input->post('uname');
		$pword=md5($this->input->post('pword'));
		
		$this->load->model('studentModel');
		$this->studentModel->modifyStudentDetail($sid,$fname,$lname,$contact,$address,$email,$uname,$pword);

		$this->load->view('studentDashboard');//loading student dashboard
		echo "User Sucessfully Updated";//result message
	}

		public function showStudent(){
			$session=$this->session->userdata('sess_id');
		if ($session!=''){
			$this->load->model('studentModel');
			$profile=$this->studentModel->showStudent($session);
			$this->load->view('displayStudent',['profile'=>$profile]);
			
		}else{
			$this->load->view('studentlogin');
		}
	}

		public function attendance(){

			$session=$this->session->userdata('sess_id');
			if ($session!=''){
			$this->load->model('studentModel');
			$profile=$this->studentModel->studentDesc($session);
			$this->load->view('attendanceStudent',['profile'=>$profile]);
		}


}
}
 
?>


