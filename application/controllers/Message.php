<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {


	public function index()
	{
        $data['page_title']='message ';
        $this->load->template('webjol/user/layouts/message',$data);
     
	
		
		
    }

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('webjol/Login_Model', 'Loginm');
    }
    
    
   
}

  
