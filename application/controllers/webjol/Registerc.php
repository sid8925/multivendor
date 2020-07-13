<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registerc extends CI_Controller {

	
	public function index()
	{
        $data['page_title']='Register Now';
        $this->load->template('webjol/user/layouts/registerv',$data);
     
	
		
		
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_Model', 'Loginm');// to load the model
    }
    
    
    public function insert()
    //function to take values from view and sending to model
    { 
        $this->form_validation->set_rules('fname','First Name','trim|required|min_length[5]|max_length[30]'); 
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('username','User Name', 'trim|required|min_length[5]|max_length[15]|is_unique[mss_site_user.username]|alpha_dash');
        $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[mss_site_user.email]');
        $this->form_validation->set_rules('mobile','Mobile No','trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('pass','Password','trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm','confirm Password','trim|required|matches[pass]');
	   if ($this->form_validation->run() == FALSE) 
		{
            $error= validation_errors();
           setFlashdata('alert alert-danger',$error,'registerc');
		} 
		else 
		{
			

        $values['fname']=$_POST['fname'];     
        $values['lname']=$_POST['lname'];
        $values['username']=$_POST['username'];
        $values['email']=$_POST['email'];
        $values['mobile']=$_POST['mobile'];
        $values['pass']=$_POST['pass'];
         
       
        
        
        $result=$this->Loginm->add_record($values);
        setFlashdata('alert alert-success','data successfully submitted','loginc');
	
    }
        
       
    }

    // insert baala khatam


    
    
   
}

  
  