<?php
	class Login_Model extends CI_Model{
		
		
	
		
		function add_record($values)
		{
			$result=$this->db->insert('mss_site_user',$values);
			return($result);
		}
	
		public function login($email, $pass)
		{
			$this->db->where("(email = '$email' OR mobile = '$email')");
			$this->db->where('pass', $pass);
			
			$query = $this->db->get('mss_site_user');
	
			if($query->num_rows() == 1) {
				return $query->row();
			}
	
			return false;
		}
    
		
	}
?>
