<?php
class User_model extends CI_model{
 function __construct() {
        $this->userTbl = 'user';
    }
      

 
function login($email, $password)  
      {   
           
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $this->db->where('password',$password);
 
  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }
      }  
  
 

public function email_check($email)
{
 
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('email',$email);
  $query=$this->db->get();
 
  if($query->num_rows()>0)
  {
    return false;
  }
  else
  {
    return true;
  }
 
}

function fetch_pass($session_id)
{
 $fetch_pass=$this->db->query("select * from user where email ='$session_id'");
$res=$fetch_pass->result();
}

function change_pass($session_id,$new_pass)
{
$update_pass=$this->db->query(" UPDATE user set password='$new_pass' where email ='$session_id'");
}
  
function displayrecords()
  {
  $query=$this->db->query("select * from user");
  return $query->result();
  }
    function displayrecordsById($id)
  {
  $query=$this->db->query("select * from user where email='".$id."'");
  return $query->result();

  }
    
  function updaterecords($fname,$lname,$mobile,$city,$id)
  {
  $query=$this->db->query("update user SET fname='$fname',lname='$lname',mobile='$mobile',city='$city' where email='".$id."'");

  } 
}
 
 ?>
