<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class User extends CI_Controller 
 {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->library('form_validation','session');
        $this->load->model('user_model');
    }
   
     public function index()
   {
           $data['']='';
           $data['msg']='';
           $data['pr']='login';
         $this->load->view('login',$data);
    } 

    function login()
    {
        error_reporting(0);
        $data['msg']='';

           $this->load->library('form_validation');  
           $this->form_validation->set_rules('email', 'email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  

                //true  
                $email = $this->input->post('email');  
                $password = md5($this->input->post('password'));  
                //model function  
                $this->load->model('user_model');  
                if($this->user_model->login($email, $password))  
                {  
                     $session_data = array(

                          'email'     =>     $email,
                          'password' =>    $password

                     );  

                      $data['msg']="<div class='alert alert-danger'>Success</div>";  
                     $this->session->set_userdata($session_data);
                     //echo "dfdfd";die();  
                      //redirect ('user/dashboard');
                   
                    $this->load->view('dashboard');
                }  
                else  
                {  
                    //echo "string";exit();
               $data['msg']="<div class='alert alert-danger'>Invalid Email Or Password</div>";   
                     $data['pr']='login';
                $this->load->view('login',$data);
                }  
           }  
           else  
           {  
                 $data['msg'] = "<div class='alert alert-danger'>".validation_errors()."</div>";

                 $data['pr']='login';
                 $this->load->view('login',$data);
           }  
     
    }    

     public function logout()
    {
     
      $this->session->sess_destroy();
      redirect('user', 'refresh');
    } 

  public function register()
{
         error_reporting(0);
        $data['msg']='';
 
        if($_POST)
        {
           
        $fname =$this->input->post('fname');
        $lname =$this->input->post('lname');
        $email =$this->input->post('email');
        $password =md5($this->input->post('password'));
        $mobile =$this->input->post('mobile');
        $city =$this->input->post('city');
        
       // echo "string";exit();
        $que=$this->db->query("select * from user where email='".$email."'");
        $row = $que->num_rows();
        if($row)
        {
        $data['msg']="<div class='alert alert-danger'>Empty Feilds/User Already Exist</div>";
        }
        else
        {
        $que=$this->db->query("insert into user values('','$fname','$lname','$email','$password','$mobile','$city')");
        
        $data['msg']="<div class='alert alert-danger'>Success</div>";
         $data['pr']='login';
        redirect('user/dashboard',$data);  
        }           
                
        }
            $data['']='';
           $data['pr']='register';  
           $this->load->view('login',$data); 
    }

   

   
      public function forget()
       {
                 $data['']='';
                 $data['pr']='forget';   
                 $this->load->view('login',$data);
      }
      public function dashboard()
       {
                  $data['']='';
                  $data['pr']='dashboard';   
                  $this->load->view('dashboard',$data);
      }
  // public function edit()
  //   {
  //       $data['']='';
  //       $data['pr']='edit';
  //                  $this->load->view('edit_profile',$data);
  //       }
       public function edit()
    {
         $data['']='';
         $data['pr']='edit';
         //$this->load->view('edit_profile',$data);
         $id=$this->session->userdata('email');
       //  print_r($id);exit();
         $result['data']=$this->user_model->displayrecordsById($id);
       //print_r($result['data']);exit();
         $this->load->view('edit_profile',$data,$result);    
   //print_r( $pass=$this->session->userdata('city'));exit();
 
       if($this->input->post('update'))
        {
           //echo "string";exit();
        $fname=$this->input->post('fname');
        $lname=$this->input->post('lname');
        $mobile=$this->input->post('mobile'); 
        $city=$this->input->post('city');

        $this->user_model->updaterecords($fname,$lname,$mobile,$city,$id);
        redirect("user/dashboard");
        } 
      
    }

   public function change_pass()
    {
        $data['']='';
         $data['pr']='change_pass';   
        
         if($_POST)

{
   // echo "string";exit();
$old_pass=md5($this->input->post('old_pass'));
$new_pass=md5($this->input->post('new_pass'));
$confirm_pass=md5($this->input->post('confirm_pass'));
$session_id=$this->session->userdata('email');
//print_r($session_id);exit();
$pass=$this->session->userdata('password');
$que=$this->db->query("select * from user where email='$session_id'");
$row=$que->row();
if((!strcmp($old_pass, $pass))&& (!strcmp($new_pass, $confirm_pass))){
$this->user_model->change_pass($session_id,$new_pass);
echo "Password changed successfully !";
$this->load->view('dashboard');

}
else{
echo "Invalid";
}
}
 $this->load->view('edit_profile',$data);
}
   }
   
    
 
?>