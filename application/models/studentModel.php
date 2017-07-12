<?php

class studentModel extends CI_Model{

	public function check_login($uname,$pword)//getting the parameters of session data
	{
		
		$this->db->where('username', $uname);
		$this->db->where('password',$pword);
		$q=$this->db->get('tbl_student');
		
		//SELECT * FROM tbl_student WHERE username='$username' AND pword='$password';

		if ($q->num_rows()){
			return $q->row()->sid;
		}else{
			return false;
		}


	}

	public function showStudent($session){//getting the session set data

	
		$this->db->select ( '*' ); 
	    $this->db->from ( 'tbl_student');
	    $this->db->join ( 'tbl_course', 'tbl_course.course_id = tbl_student.course_id' , 'left' );
	    $this->db->where('tbl_student.sid',$session);
		$query=$this->db->get();
		return $query->result();

	}

	public function modifyStudentDetail($sid,$fname,$lname,$contact,$address,$email,$uname,$pword){
		//storing the database value in array
		$arr=array(
			'firstname'=>$fname,
			'lastname'=>$lname,
			'contact'=>$contact,
			'address'=>$address,
			'email'=>$email,
			'username'=>$uname,
			'password'=>$pword
			);

		$this->db->where("sid",$sid);
		$this->db->update('tbl_student',$arr);
			

				}


		public function studentDesc($session){
		$this->db->select ( '*' ); 
	    $this->db->from ( 'tbl_student');
	    $this->db->join ( 'tbl_attendance', 'tbl_attendance.sid= tbl_student.sid' , 'left' );
	    $this->db->join ( 'tbl_course', 'tbl_course.course_id = tbl_student.course_id' , 'left' );
		$this->db->where('tbl_student.sid',$session);
		$query=$this->db->get();
		return $query->result();


}
}
?>