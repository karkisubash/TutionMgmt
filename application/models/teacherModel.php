<?php

class teacherModel extends CI_Model{

	public function login_valid($username,$password)
	{
		
		$this->db->where('username', $username);
		$this->db->where('password',$password);
		$q=$this->db->get('tbl_teacher');
		
		//SELECT * FROM tbl_teachher WHERE username='$username' AND pword='$password';

		if ($q->num_rows()){
			return $q->row()->tid;
		}else{
			return false;
		}


	}

	public function showTeacher($session){

		$this->db->where("tid",$session);
		$query=$this->db->get('tbl_teacher');
		return $query->result();

	}

	public function modifyteacherDetail($tid,$fname,$lname,$contact,$uname,$pword){
		$arr=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'phnNumber'=>$contact,
			'username'=>$uname,
			'password'=>$pword
			);


		$this->db->where("tid",$tid);
		$this->db->update('tbl_teacher',$arr);
	}

	public function teacherDesc($session){
		$this->db->select ( '*' ); 
	    $this->db->from ( 'tbl_teacher');
	    $this->db->join ( 'tbl_attendance', 'tbl_attendance.tid = tbl_teacher.tid' , 'left' );
	    $this->db->join ( 'tbl_course', 'tbl_course.course_id = tbl_teacher.course_id' , 'left' );
		$this->db->where('tbl_teacher.tid',$session);
		$query=$this->db->get();
		return $query->result();


		// $this->db->select ( '*' ); 
	 //    $this->db->from ( 'tbl_course');
	 //    $this->db->join ( 'tbl_class', 'tbl_class.course_id = tbl_course.course_id' , 'left' );
	 //    //$this->db->where ( 'tbl_course.course_id', $courseid);
	 //    $query = $this->db->get ();
	 //    return $query->result ();

	}

	public function uploadFile($file,$name){
		$arr=array(
			 $file,
			 $name
			);

		$this->db->insert("tbl_upload",$arr);
	}






}
?>