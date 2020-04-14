<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

public function index($value='')
	{
		# code...
	}	
	
  public function user_login($username,$pass)
        {
        	$this->db->select('*');
			 $this->db->where('username', $username);
			  $this->db->where('password', $pass);
			  

			  $result = $this->db->get('user_account');
			  if ($result->num_rows()==1) {
			    return $result->row(0)->id;
			  }else{

			    return false;
			  }
        }

        public function user_summary($username)
        {
           $query = $this->db->query("SELECT * FROM reserve where username='$username' order by id desc");
                         return $query->result_array();  
        }

        public function event_summary($username)
        {
            $query = $this->db->query("SELECT * FROM complex_hall where username='$username' order by id desc");
                         return $query->result_array();  
        }

         public function event()
        {
           $query = $this->db->query("SELECT * FROM complex_hall where username!='' order by id desc ");
                         return $query->result_array();  
        }


        public function users()
        {
           $query = $this->db->query("SELECT * FROM user_account order by id desc");
                         return $query->result_array();  
        }

         public function summary()
        {
           $query = $this->db->query("SELECT * FROM reserve order by id desc");
                         return $query->result_array();  
        }

        public function user_info($username)
        {
                  $query = $this->db->query("SELECT * FROM user_account where  username = '$username'");
                         return $query->row_array();  
        }

        public function complex_list()
        {

           // $admin = $_SESSION['username'];
            $query = $this->db->query("SELECT * FROM complex_hall where username=''");
                         return $query->result_array();  
          # code...
        }

        public function reserve($id)
        {
        	$query = $this->db->query("SELECT * FROM complex_hall where id='$id'");
        	return $query->row_array();;
        }


        public function company()
        {
          $query = $this->db->query("SELECT * FROM team");
                         return $query->result_array();  
        }

        public function check_reserved($checkIn,$checkOut)
        {
           $query = $this->db->query("SELECT  * FROM   complex_hall WHERE check_in<='$checkIn' OR check_out>='$checkOut'");
                         return $query->result_array();  
        }
}

/* End of file page_model.php */
/* Location: ./application/models/page_model.php */ ?>