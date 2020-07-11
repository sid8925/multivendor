<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registerc extends CI_Controller {

	/**
	 * bde mehnat sai kiya hai bhai kuch gadbad mt krna ab
     * 
     * sbse phle login bale view ko load kiya $data['page_title']='Login Now'; aisa humesha daina kyoki sayad usko
     * ak argument chaiye hota hai
     * uske baad model load kraya
     * uske baad insert mai data register hota hai index view baale login sai link hai
     * """"""""""""""""Important think form validation mai phle argument mai name same aayega jaisa tumhare input field ka
     * name hai
     * 
     * 
	 */
	public function index()
	{
        $data['page_title']='Register Now';
        $this->load->template('user/layouts/registerv',$data);
     
	
		
		
    }

    function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');// to load the model
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
        setFlashdata('alert alert-success','data successfully submitted','main/index');
	
    }
        
       
    }

    // insert baala khatam


    
    
   
}

  
  