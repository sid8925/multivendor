<?php
	class Login_Model extends CI_Model{
		
		
	
		
		function add_record($table, $data)
		{
			$result=$this->db->insert($table, $data);
			return($result);
		}
	
		public function login($table,$email, $pass)
		{
			$this->db->where("(email = '$email' OR mobile = '$email')");
			$this->db->where('pass', $pass);
			
			$query = $this->db->get($table);
	
			if($query->num_rows() == 1) {
				return $query->row();
			}
	
			return false;
		}


		public function forgot($table,$email)
                        {
                                $this->db->select('email');
                                $this->db->from($table); 
                                $this->db->where('email', $email); 
                                $query=$this->db->get();
                                return $query->row_array();
                        }

 

        public function dataupgrade($data)
        {

                $this->db->where("(email = '$data' )");
			
			
			$query = $this->db->get('mss_mail_exist');
	
			if($query->num_rows() == 0) {
                                
                                $query=$this->db->insert('mss_mail_exist', $data);
                                return True;
                        }
                        else {

                                $result=$this->db->delete('mss_mail_exist', $data);
                                return($result);

                        }
                        
               
		}
		
	}
?>
