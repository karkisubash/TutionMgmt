<?php
class MainModel extends CI_Model{

	public function insertRegister($fname,$lname,$address,$contact,$email,$uname,$pword){
		$arr=array(
			'fname'=>$fname,
			'lname'=>$lname,
			'address'=>$address,
			'contact'=>$contact,
			'email'=>$email,
			'uname'=>$uname,
			'pword'=>$pword
			);
		$this->db->insert('tblregister',$arr);

	}

	public function retrive($id){
	$this->db->where('id',$id);
	$this->db->get('tblregister');
	return $this->db->get('tblregister');
	}

	public function valid_login($username,$password)
	{
		
		$this->db->where('uname', $username);
		$this->db->where('pword',$password);
		$query=$this->db->get('tblregister');
		//return $query->row()->user_type_id;
		//SELECT * FROM tblregister WHERE username='$username' AND pword='$password';

		if ($query->num_rows()){
			return $query->row()->id;
		}else{
			return false;
		}


	}


	
}

?>