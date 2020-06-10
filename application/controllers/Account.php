<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('account_logged_in') ) {
            redirect('login','refresh');
                }
    }



	public function index()
	{
		  $data['title'] = 'Dashboard';
            $username = $_SESSION['username'];
              $data['user_info'] = $this->Page_model->user_info($username);
        
             $this->load->view('template/header', $data);
             $this->load->view('store/dashboard', $data);
             $this->load->view('template/footer', $data);
	}



	  public function profile()
    {
             $data['title'] = 'Dashboard';
              $username = $_SESSION['username'];
          $data['user_info'] = $this->Page_model->user_info($username);
             $this->load->view('template/header', $data);
             $this->load->view('store/profile', $data);
             $this->load->view('template/footer', $data);
    }


     public function password()
    {


       $this->form_validation->set_rules('newpassword', 'New Password', 'trim|required|min_length[6]');
       $this->form_validation->set_rules('conpassword', 'Confirm Password', 'trim|required|matches[newpassword]');

      if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Password';
            $data['section'] = 'Password';
             $username = $_SESSION['username'];
          $data['user_info'] = $this->Page_model->user_info($username);
              $username = $_SESSION['username'];
             $data['admin'] = 'Change Password';
             $this->load->view('template/header', $data);
             $this->load->view('store/password', $data);
             $this->load->view('template/footer', $data);
      } else {
          $password = md5($this->input->post('newpassword'));
         $update_profile = array(
                
                    'password'=> $password
        );
                             $username = $_SESSION['username'];
                    $this->db->where('username',$username);
                      $this->db->update('user_account', $update_profile);
                    //   $this->session->set_flashdata("change_password","Password Successfully Changed");
                    echo '<script>alert("Password Successfully Change")</script>';

            $data['title'] = 'Password';
            $data['section'] = 'Password';
             $data['admin'] = 'Change Password';
              $username = $_SESSION['username'];
          $data['user_info'] = $this->Page_model->user_info($username);
             $this->load->view('template/header', $data);
             $this->load->view('store/password', $data);
             $this->load->view('template/footer', $data);
        // redirect('Page/logout','refresh');
      }
    }


}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */ ?>