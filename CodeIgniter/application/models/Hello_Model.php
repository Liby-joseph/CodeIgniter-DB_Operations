<?php

class Hello_Model extends CI_Model 
{
	function saverecords($name,$email,$mobile)
	{
	$query="insert into users values('','$name','$email','$mobile')";
	$this->db->query($query);
	}
	
	function displayrecords()
	{
	$query=$this->db->query("select * from users");
	return $query->result();
    }
    function deleterecords($id)
	{
	$this->db->query("delete  from users where user_id='".$id."'");
    }	
    function updaterecords($name,$email,$mobile,$id)
	{
	$query=$this->db->query("update users SET name='$name',email='$email',mobile='$mobile' where user_id='".$id."'");
    }
    
    function displayrecordsById($id)
	{
	$query=$this->db->query("select * from users where user_id='".$id."'");
	return $query->result();
	}
}
?>