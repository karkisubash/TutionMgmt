<?php
class MainModel extends CI_Model{	

	public function insertStudent($fname,$lname,$address,$contact,$email,$uname,$pword,$course){
		$arr=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'contact'=>$contact,
			'username'=>$uname,
			'password'=>$pword,
			'address'=>$address,
			'email'=>$email,
			'course_id'=>$course
			);
		$this->db->insert('tbl_student',$arr);

	}

	// public function retrive($id){
	// $this->db->where('id',$id);
	// $this->db->get('tblregister');
	// return $this->db->get('tblregister');
	// }

	public function valid_login($username,$password)
	{
		
		$this->db->where('username', $username);
		$this->db->where('password',$password);
		$query=$this->db->get('tbl_admin');
		
		//SELECT * FROM tblregister WHERE username='$username' AND pword='$password';

		if ($query->num_rows()){
			return $query->row()->aid;
		}else{
			return false;
		}


	} 

	public function get_course(){
		$query=$this->db->get('tbl_course');
		if($query ->num_rows()>0){
			return $query->result();
		}
	
}
	public function selectStudent($sid){
		$this->db->where("sid",$sid);
		$query=$this->db->get('tbl_student');
		return $query;

	}

	public function updateStudentDetail($sid,$fname,$lname,$contact,$address,$email,$course){
		
		$arr=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'contact'=>$contact,
			'address'=>$address,
			'email'=>$email,
			'course_id'=>$course
			);

		$this->db->where("sid",$sid);
		$this->db->update('tbl_student',$arr);
		// return "Successfully Updated";
	}

	public function retrieveStudent(){
		//$this->db->where("firstname",$student);
		$query=$this->db->get('tbl_student');
		return $query->result();

	}

	public function removeStudent($sid){
		$this->db->where("sid",$sid);
		$this->db->delete("tbl_student");
	}

	public function retrieveTeacher(){
		//$this->db->where("firstname",$student);
		$query=$this->db->get('tbl_teacher');
		return $query->result();

	}

	public function removeTeacher($tid){
		$this->db->where("tid",$tid);
		$this->db->delete("tbl_teacher");
	}

	

	

	public function insertTeacher($fname,$lname,$contact,$uname,$pword,$course){
		$data=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'phnNumber'=>$contact,
			'username'=>$uname,
			'password'=>$pword,
			'course_id'=>$course
			);
		$this->db->insert('tbl_teacher',$data);

	}

	public function selectTeacher($tid){
		$this->db->where("tid",$tid);
		$query=$this->db->get('tbl_teacher');
		return $query;

	}

	public function teacher_update($tid,$fname,$lname,$contact,$uname,$course){
		$arr=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'phnNumber'=>$contact,
			'username'=>$uname,
			'course_id'=>$course
			);

		$this->db->where("tid",$tid);
		$this->db->update('tbl_teacher',$arr);

	}

	public function get_name(){
		$query=$this->db->get('tbl_student');
		if($query->num_rows()>0){
			return $query->result();
		}
	}

	public function attendanceStudent($date,$sid,$status){
		$data=array(
			'date'=>$date,
			'sid'=>$sid,
			'status'=>$status
			);
		$this->db->insert('tbl_attendance',$data);
	}

	public function attendanceTeacher($tdate,$tid,$tstatus){
		$arr=array(
			'date'=>$tdate,
			'tid'=>$tid,
			'status'=>$tstatus
			);
		$this->db->insert('tbl_attendance',$arr);
	}

	public function getTeachername(){
		$query=$this->db->get('tbl_teacher');
		if($query->num_rows()>0){
			return $query->result();
		}
	}

	public function updateEvent($news){
		$this->db->insert("tbl_event",$news);
		return "Event Updated";
	}
	

	public function retrieveEvent(){
		//$this->db->where("firstname",$student);
		$query=$this->db->get('tbl_event');
		return $query->result();

	}

	public function retrieveCourse(){
		//$this->db->where("firstname",$student);
		// $query=$this->db->get('tbl_course');
		// return $query->result();


		$this->db->select ( '*' ); 
	    $this->db->from ( 'tbl_course');
	    $this->db->join ( 'tbl_class', 'tbl_class.course_id = tbl_course.course_id' , 'left' );
	    //$this->db->where ( 'tbl_course.course_id', $courseid);
	    $query = $this->db->get ();
	    return $query->result ();
 }

 		public function removeCourse($cid){
 		$this->db->where("course_id",$cid);
		$this->db->delete("tbl_class");

		$this->db->where("course_id",$cid);
		$this->db->delete("tbl_course");

		
		// $this->db->join ( 'tbl_class', 'tbl_class.course_id = tbl_course.course_id' , 'left' );
		
	}

	public function insertCourse($cname,$fee){
		$arr=array(
			'coursename'=>$cname,
			'course_fee'=>$fee
			);
		$this->db->insert('tbl_course',$arr);
		
		

	}

	public function insertClass($course,$start,$end){
		$arr=array(
			'course_id'=>$course,
			'start_time'=>$start,
			'end_time'=>$end
			);
		$this->db->insert('tbl_class',$arr);

	}

		public function insertAmt($date,$sid,$course,$amt){
		$arr=array(
			'date'=>$date,
			'name'=>$sid,
			'course'=>$course,
			'amount_paid'=>$amt
			);
		$this->db->insert('tbl_account',$arr);

	}


	public function insertMark($sname,$course,$marks){


		$arr=array(
			'name'=>$sname,
			'course'=>$course,
			'totalMarks'=>$marks
			);
		$this->db->insert('tbl_exam',$arr);

	}

}
?>