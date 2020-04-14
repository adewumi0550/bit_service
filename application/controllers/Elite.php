<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Elite extends CI_Controller {


		public function index($page='index')
	{
		 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

			// $data['footer_post'] = $this->Page_model->foot_post();
			        $data['title'] = ''; // Capitalize the first letter
              // // print_r($this->Page_model->home_info());
              // $data['info'] = $this->Page_model->home_info();
              // $data['blogs'] = $this->Page_model->blog_table();
                    $this->load->view('template/main_header', $data);
			        $this->load->view('pages/'.$page, $data);
                    $this->load->view('template/main_footer', $data);
	}

		public function login()
	{
		
			         if ($this->session->userdata('user_logged_in') ) {
            redirect('dashboard','refresh');
                }else{
             $this->form_validation->set_rules('username', 'Username', 'trim|required');
                               // $this->form_validation->set_rules('password', 'Password', 'trim|required',
                     //    array('required' => '<script>alert("Adewumi");</script>'));
                     $this->form_validation->set_rules('password', 'Password', 'trim|required');
                      // $this->form_validation->set_message('username', '"<script>alert("Adewumi");</script>"');
                            if ($this->form_validation->run() == FALSE) {
                                
                        $data['title'] = 'Login Panel'; // Capitalize the first letter
                  $this->load->view('pages/index', $data);
                            } else {
                            $username =  strtolower($this->input->post('username'));
                                 $password =  strtolower($this->input->post('password'));
                                 $pass = md5($password);

                          $user_id = $this->Page_model->user_login($username,$pass);

                          if ($user_id) {
                            $user_data =array(
                              'user_id' => $user_id,
                              'username' => $username,
                              'password' => $password,
                              'user_logged_in' => TRUE
                            );
                            $this->session->set_userdata($user_data);
                           $data['title'] = 'Dashboard';
                           
                          // echo '<script>alert("You have succesfully logged In")</script>';
                            redirect('dashboard','refresh',$data);

                          }else{

                    $this->session->set_flashdata("login_failed","Invalid Username or Password");

                                

                        $data['title'] = 'Login Panel'; // Capitalize the first letter
                   $this->load->view('pages/index', $data);
                            }
          }
      }
	}


          public function Logout()
            {
                  $this->session->unset_userdata('user_logged_in');
                  $this->session->unset_userdata('user_id');
                  $this->session->unset_userdata('username');
                  $this->session->unset_userdata('password');
                  $this->session->set_flashdata("logout","You have succesfully log out");
                        redirect('login','refresh');
            }


}

?>