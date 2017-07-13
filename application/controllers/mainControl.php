<?php

//session_start(); //starting session in order to access it through CI
class MainControl extends CI_Controller{
	public function index(){

		$this->load->view('main');
	}
public function login_validation(){ //admin login with login validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|alpha');
		$this->form_validation->set_rules('pwd','Password','required');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()==true)
		{
			//true
			$username=$this->input->post('username');
			$password=md5($this->input->post('pwd'));
			
			$this->load->model('mainModel');
			//storing the result from model in $login_id variable

			$login_id=$this->mainModel->valid_login($username,$password);

			If($login_id>=1){
				//loading session and storing admin id and username in session
				$this->load->library('session');
				$this->session->set_userdata('id',$login_id);
				$this->session->set_userdata('username',$username);
					
				$this->load->view('adminDashboard');
				
			// 	//++echo 'password match'
			}else{
 				echo ("Username or Password Error");
 			}
			}else{

				//$this->load->view('LOGIN');
				echo ('somethng is wrong');
			
 			}
 } 

public function signUp(){
	//getting the user input value from the register form
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$uname=$this->input->post('uname');
		$pword=md5($this->input->post('pword'));
		$course=$this->input->post('course_id');

		$this->load->model('mainModel');
		//passing the input value to model
		$this->mainModel->insertStudent($fname,$lname,$address,$contact,$email,$uname,$pword,$course);

		$this->load->view('studentlogin');
	}

	public function book(){
	//getting the user input value from the register form
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$course=$this->input->post('course_id');

		$this->load->model('mainModel');
		//passing the input value to model
		$this->mainModel->booking($fname,$lname,$address,$contact,$email,$course);


		$this->load->view('main');
	}
	public function admit(){
		//getting the admin input value from the admission form
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$address=$this->input->post('address');
		$contact=$this->input->post('contact');
		$email=$this->input->post('email');
		$uname=$this->input->post('uname');
		$pword=md5($this->input->post('pword'));
		$course=$this->input->post('course_id');
		//passing the input value to model
		$this->load->model('mainModel');
		$this->mainModel->insertStudent($fname,$lname,$address,$contact,$email,$uname,$pword,$course);
		//redirecting to admin dashboard
		$this->load->view('adminDashboard');
	}

	

 	public function courseInRegister(){
 		//to display courses name in combobox in student register page
 		
			$this->load->model('mainModel');
			$getMycourse=$this->mainModel->get_course();
			// print_r($get_course);
			// exit();

			//stoting the course table value as array in get_course variable
			$this->load->view('Register',['get_course'=>$getMycourse]);
		}


		public function courseInBook(){
 		//to display courses name in combobox in student register page
 		
			$this->load->model('mainModel');
			$getMycourse=$this->mainModel->get_course();
			// print_r($get_course);
			// exit();
			
			//stoting the course table value as array in get_course variable
			$this->load->view('Booking',['get_course'=>$getMycourse]);
		}
 public function logout()
 //logging out by removing session data
		{
		$this->session->unset_userdata('id');
	
		$this->load->view('adminlogin');
		}
	

 	public function courseDropDown(){

 		//displaying course name in combo box for student admission page
 		
			$this->load->model('mainModel');
			$getMycourse=$this->mainModel->get_course();
			// print_r($get_course);
			// exit();
			$this->load->view('admission',['get_course'=>$getMycourse]);
		}
 	

	public function viewStudent(){
		//storing the student table value in array
		$this->load->model('mainModel');
		//$student=$this->input->post('sname');
		$data['arr']=$this->mainModel->retrieveStudent();
		$this->load->view('student',$data);

	}
	public function viewBook(){
		//storing the student table value in array
		$this->load->model('mainModel');
		//$student=$this->input->post('sname');
		$data['arr']=$this->mainModel->retrieveBook();
		$this->load->view('book',$data);

	}

	public function deleteStudent(){
		//deleting the value by gettng the id from the view
		$this->load->model('mainModel');
		$sid=$this->input->get('id');
		$this->mainModel->removeStudent($sid);

		$data['delete_message']="Successfully deleted";
	}

	public function updateDetails(){
	
		//updating student details of the particular student by getting the id from the student view page
		$this->load->model('mainModel');
		$sid=$this->input->get('sid');
		$this->mainModel->selectStudent($sid);

		$result=$this->mainModel->selectStudent($sid);
		$data['arr']=$result;
		$this->load->view('updateStudent',$data);
		//$this->load->view('updateStudent',['get_course'=>$getMycourse,'arr'=>$data]);
	}

	public function studentUpdate(){
		//getting the value from the user input from the update form
		$sid=$this->input->post('sid');
		$fname=$this->input->post('firstname');
		$lname=$this->input->post('lastname');
		$contact=$this->input->post('phnNumber');
		$address=$this->input->post('location');
		$email=$this->input->post('email');
		$course=$this->input->post('course');
		
		$this->load->model('mainModel');
		$this->mainModel->updateStudentDetail($sid,$fname,$lname,$contact,$address,$email,$course);

		$this->load->view('adminDashboard');
		echo "User Sucessfully Updated";
	}

	public function viewTeacher(){
		$this->load->model('mainModel');
		//$student=$this->input->post('sname');
		$data['arr']=$this->mainModel->retrieveTeacher();
		$this->load->view('teacher',$data);

	}

	public function deleteTeacher(){
		$this->load->model('mainModel');
		$tid=$this->input->get('id');
		$this->mainModel->removeTeacher($tid);
	}

	public function courseValue(){
 			//to display course in combobox in teacher adding form
			$this->load->model('mainModel');
			$getMycourse=$this->mainModel->get_course();
			// print_r($get_course);
			// exit();
			$this->load->view('addTeacher',['get_course'=>$getMycourse]);
		}

	public function teacherAdd(){
		//adding student from teacher adding form and gettin getting the value inserted by admin
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$contact=$this->input->post('contact');
		$uname=$this->input->post('uname');
		$pword=md5($this->input->post('pword'));
		$course=$this->input->post('course_id');

		$this->load->model('mainModel');
		$this->mainModel->insertTeacher($fname,$lname,$contact,$uname,$pword,$course);

		$this->load->view('adminDashboard');
	}	

	public function updateTeacherDetail(){

		$this->load->model('mainModel');
		$tid=$this->input->get('tid');
		$this->mainModel->selectTeacher($tid);

		$result=$this->mainModel->selectTeacher($tid);
		$data['arr']=$result;
		$this->load->view('updateTeacher',$data);
		//$this->load->view('updateStudent',['get_course'=>$getMycourse,'arr'=>$data]);
	}	

	public function teacherUpdate(){
		$tid=$this->input->post('tid');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$contact=$this->input->post('contact');
		$uname=$this->input->post('uname');
		$course=$this->input->post('course');
		
		$this->load->model('mainModel');
		$this->mainModel->teacher_update($tid,$fname,$lname,$contact,$uname,$course);

		$this->load->view('adminDashboard');
		echo "User Sucessfully Updated";
	}

	public function cmbName(){

 
 			//displays teacher and student name in combo box for attendance form
			$this->load->model('mainModel');
			$getName=$this->mainModel->get_name();
			$this->load->model('mainModel');
			$getTname=$this->mainModel->getTeachername();
			// print_r($get_course);
			// exit();
			//$this->cmbTeacherName();
			$this->load->view('attendance',['get_name'=>$getName,'getTeacherName'=>$getTname]);

			
		}

	public function studentAttendance(){
		//post the attendace of student by gettinhg the admin inserted value
		$date=$this->input->post('date');
		$sid=$this->input->post('cmbStudent');
		$status=$this->input->post('spa');

	

		$this->load->model('mainModel');
		$this->mainModel->attendanceStudent($date,$sid,$status);

		$this->load->view('adminDashboard');

	}

	public function teacherAttendance(){
		$tdate=$this->input->post('tdate');
		$tid=$this->input->post('cmbTeacher');
		$tstatus=$this->input->post('tpa');
		
		$this->load->model('mainModel');
		$this->mainModel->attendanceTeacher($tdate,$tid,$tstatus);

		$this->load->view('adminDashboard');
		}

		public function eventUpdate(){
			$news=array(
			'text'=>$this->input->post('txtEvent')
				);

			$this->load->model('mainModel');
			$this->mainModel->updateEvent($news);

			$this->load->view('eventUpdate');

			echo "Event Updated Successfully";
		}

		public function viewEvent(){
		$this->load->model('mainModel');
		//$student=$this->input->post('sname');
		$data['records']=$this->mainModel->retrieveEvent();
		$this->load->view('events',$data);

	}
		public function name(){

			$this->load->model('mainModel');
			$getName=$this->mainModel->get_name();
	
			$this->load->model('mainModel');
			$course=$this->mainModel->get_course();
			
			$this->load->view('account',['course'=>$course, 'getname'=>$getName]);
		}

		public function viewCourse(){
		$this->load->model('mainModel');
		//$student=$this->input->post('sname');
		$data['arr']=$this->mainModel->retrieveCourse();
		$this->load->view('course',$data);

	}

		public function deleteCourse(){
		$this->load->model('mainModel');
		$cid=$this->input->get('cid');
		$this->mainModel->removeCourse($cid);

		$this->viewCourse();
	}

	public function courseAdd(){
		//adding couser
		$cname=$this->input->post('cname');
		$fee=$this->input->post('fee');
		

		$this->load->model('mainModel');
		$this->mainModel->insertCourse($cname,$fee);

		$this->viewCourse();
	}

	public function courseCmb(){
		//displaying course in combobox in class adding page
 		
			$this->load->model('mainModel');
			$course=$this->mainModel->get_course();
			// print_r($get_course);
			// exit();
			$this->load->view('classAdd',['get_course'=>$course]);
		}

	public function classAdd(){
		//adding class time with corresponding course
		$course=$this->input->post('course_id');
		$start=$this->input->post('start');
		$end=$this->input->post('end');
		
		

		$this->load->model('mainModel');
		$this->mainModel->insertClass($course,$start,$end);

		$this->viewCourse();
	}

	public function saveAccount(){
		//saving the payment information inserted by admin and generating bill for the same
		$date=$this->input->post('date');
		$sid=$this->input->post('cmbStudent');
		$course=$this->input->post('course_id');
		$amt=$this->input->post('amount');
		
		

		$this->load->model('mainModel');
		$this->mainModel->insertAmt($date,$sid,$course,$amt);

		$this->bill();
	}


	public function bill(){

		$this->load->view('bill');
	}

	public function examReport(){

		$this->load->view('examReport');
	}

	public function nameForExam(){

			$this->load->model('mainModel');
			$getName=$this->mainModel->get_name();
		
			$this->load->model('mainModel');
			$course=$this->mainModel->get_course();
			
			$this->load->view('exam',['course'=>$course, 'getname'=>$getName]);
		}

	public function saveExam(){
		
		$sname=$this->input->post('cmbStudent');
		$course=$this->input->post('course');
		$marks=$this->input->post('marks');
		
		

		$this->load->model('mainModel');
		$this->mainModel->insertMark($sname,$course,$marks);

		$this->examReport();
	}


	}
?>