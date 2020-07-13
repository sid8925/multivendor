<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * template is a by defult format given by sir , in this in the place of 
	 * $this -> load -> view('') we can write template bcoz template is link to "core" MY_Loader in that sir alredy linked
	 * header footer for view
	 */
	public function index()
	{
		$data['page_title']='Home';
		$this->load->template('webjol/user/layouts/home',$data);
	
		
		
		
	}
}
