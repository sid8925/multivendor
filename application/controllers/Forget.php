<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget extends CI_Controller {


	public function index()
	{
        $data['page_title']='Forget ';
        $this->load->template('webjol/user/layouts/forget',$data);
     
	
		
		
    }

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('webjol/Login_Model', 'Loginm');
    }
    
    
    
    public function forgot()
    {
      
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        
        if ($this->form_validation->run() == FALSE) 
		{
            $error= validation_errors();
           setFlashdata('alert alert-danger',$error,'forget');
		} 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            
          $findemail = $this->Loginm->forgot('mss_site_user',$email);  

          if($findemail)
                {
                    
                    $email = $this->security->xss_clean($this->input->post('email')); 
                    $data = $this->Loginm->dataupgrade($email);  
                 
           
            
 /*
            $email = $this->security->xss_clean($this->input->post('email'));
            $subject = "Forget Password";
            $from = "shubhamsharmacse29@gmail.com";
            $tokan= random_string('alnum',20);
            $message = "pls click on the link send in your mail  <br> <a href='".base_url('reset?tokan=').$tokan."''> Rest password </a>"; 
          
            
                $config['protocol']    = 'smtp';
                $config['smtp_host']    = 'ssl://smtp.gmail.com';
                $config['smtp_port']    = '465';
                $config['smtp_timeout'] = '60';

                $config['smtp_user']    = 'shubhamsharmacse29@gmail.com';    //Important
                $config['smtp_pass']    = 'shubh@lisha1';  //Important

                $config['charset']    = 'utf-8';
                $config['newline']    = "\r\n";
                $config['mailtype'] = 'html'; // or html
                $config['validation'] = TRUE; // bool whether to validate email or not 

                

                $this->email->initialize($config);
                $this->email->set_mailtype("html");
                $this->email->from($from);
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($message);
                 
                $this->email->send();
            

                */ 
            }

            else{
         
                $error= validation_errors();
                setFlashdata('alert alert-danger','email not exist','forget');
       }
    }
}

  
}