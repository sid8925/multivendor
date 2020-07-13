<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {


	public function index()
	{
        $data['page_title']='Login Now';
        $this->load->template('webjol/user/layouts/loginv',$data);
     
	
		
		
    }

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('webjol/Login_Model', 'Loginm');
    }
    
    
    
    public function login()
    {
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('pass', 'pass', 'required');
        
       
        
        if ($this->form_validation->run() == FALSE) 
		{
            $error= validation_errors();
           setFlashdata('alert alert-danger',$error,'loginc');
		} 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $pass = $this->security->xss_clean($this->input->post('pass'));
            
            $user = $this->Loginm->login($email, $pass);
            
            if($user){
                $userdata = array(
                    'id' => $user->id,
                    'username' => $user->username,
                    
                     'authenticated' => TRUE
                );
                
                $this->session->set_userdata($userdata);
              
                setFlashdata('alert alert-success','WELCOME BACK','main/index');
            }
            else {
                $error= validation_errors();
           setFlashdata('alert alert-danger','Incorrect Email / Mobile no or password','loginc');
               
            }
        }
    }
    

    //login baala khatam

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('loginc');
    }
}

  
  