<?php

class teacherActivity extends CI_Controller{
	public function teacher_login(){

		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('uname','Uname','required|alpha');
		// $this->form_validation->set_rules('pword','Pword','required');
		// $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		// if($this->form_validation->run()==true)
		// {
			
			$username=$this->input->post('username');
			$password=md5($this->input->post('pwd'));
			
			$this->load->model('teacherModel');

			$log_id=$this->teacherModel->login_valid($username,$password);
			If($log_id>=1){
				$this->load->library('session');
				$this->session->set_userdata('sess_id',$log_id);
				$this->session->set_userdata('username',$username);
					
				$this->load->view('teacherdashboard');

			}else{
 				echo ("Username or Password Error");
 			}
			// }else{
			// 	echo ('somethng is wrong');
			
 		// 	}

}
		 public function logout()
		{
		$this->session->unset_userdata('sess_id');
	
		$this->load->view('teacherlogin');
		}

		public function showTeacher(){
			$session=$this->session->userdata('sess_id');
		if ($session!=''){
			$this->load->model('teacherModel');
			$profile=$this->teacherModel->showTeacher($session);
			$this->load->view('teacherTupdate',['profile'=>$profile]);
			
		}else{
			$this->load->view('teacherlogin');
		}
	}

		public function teacherModify(){
		$tid=$this->input->post('tid');
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$contact=$this->input->post('contact');
		$uname=$this->input->post('uname');
		$pword=md5($this->input->post('pword'));

		// echo $tid;
		// echo $fname;
		// echo $lname;
		// echo $contact;
		// echo $uname;
		// echo $pword;

		// exit();
		
		$this->load->model('teacherModel');
		$this->teacherModel->modifyteacherDetail($tid,$fname,$lname,$contact,$uname,$pword);

		$this->load->view('teacherDashboard');
		echo "User Sucessfully Updated";
	}

		public function teacherDetails(){

			$session=$this->session->userdata('sess_id');
			if ($session!=''){
			$this->load->model('teacherModel');
			$profile=$this->teacherModel->teacherDesc($session);
			$this->load->view('displayTeacher',['profile'=>$profile]);
			
			}else{
			$this->load->view('teacherlogin');

	}

	}	

		public function upload(){
			//uploading image
		$config['upload_path']="assets/images/";
		 $config['allowed_types'] = 'txt|pdf|docx';
            $config['max_size'] = '1000';
            //$config['max_width']  = '1024';
            //$config['max_height']  = '768';

		
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		//$this->upload->do_upload('userfile');
		
		$data=array('upload_data'=>$this->upload->data());

		$file=$data['upload_data']['userfile'];
		echo $file;
		$name=$this->input->post('name');

		$this->load->model('teacherModel');
		$this->teacherModel->uploadFile($file,$name);
		
		//$data['uploadmsg']="file uploaded";
		$this->load->view('upload');
		}
} 

?>