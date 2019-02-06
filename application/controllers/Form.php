<?php
class Form extends CI_Controller
{
public function __construct()
{
//call CodeIgniter's default Constructor
parent::__construct();
//load database libray manually
$this->load->database();
$this->load->library('session');
//load Model
$this->load->helper('url');
$this->load->model('Form_model');
}
public function index(){
$data['']='';
         $data['pr']='change_pass';
         $this->load->view('edit_profile',$data);
         }
public function change_pass()
{
  dfgfdgdfgdfgfdg

if($this->input->post('change_pass'))
{
$old_pass=$this->input->post('old_pass');
$new_pass=$this->input->post('new_pass');
$confirm_pass=$this->input->post('confirm_pass');
$session_id=$this->session->userdata('email');
//print_r($session_id);exit();
$pass=$this->session->userdata('password');
$que=$this->db->query("select * from user where email='$session_id'");
$row=$que->row();
if((!strcmp($old_pass, $pass))&& (!strcmp($new_pass, $confirm_pass))){
$this->Form_model->change_pass($session_id,$new_pass);
echo "Password changed successfully !";
$this->load->view('dashboard');

}
else{
echo "Invalid";
}
}
$this->load->view('change_pass');
}
}
?>
