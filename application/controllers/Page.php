<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

  //  function __construct() {
  //       parent::__construct();

  //         if (!$this->session->userdata('user_logged_in') ) {
       

  // redirect('login','refresh');
          
  // }
  //       // $this->tree_change();
  //   }




                public function index($page='index')
                {

                   if ( ! file_exists(APPPATH.'views/store/'.$page.'.php'))
                      {
                              // Whoops, we don't have a page for that!
                              show_404();
                      }

                                  $data['title'] = 'Dashboard';

                  $data['title'] = 'Dashboard';
                  // $data['complex'] = $this->Page_model->complex_list();
                 $this->load->view('template/header', $data);
                 $this->load->view('store/'.$page, $data);
                 $this->load->view('template/footer', $data);
                }



              public function signup()
              {
                  

                 $this->form_validation->set_rules('auth_firstname', 'First Name', 'trim|required');
                 $this->form_validation->set_rules('auth_lastname', 'Last Name', 'trim|required');
                 $this->form_validation->set_rules('auth_middlename', 'Middle Name', 'trim');
          $this->form_validation->set_rules('auth_email', 'Email Address', 'trim|valid_email|required');
           $this->form_validation->set_rules('auth_phoneNumber', 'Phone Number', 'trim|required');
            $this->form_validation->set_rules('auth_password', 'Password', 'trim|required|min_length[5]');
            $this->form_validation->set_rules('auth_confirmPassword', 'Confrim Password', 'trim|matches[auth_password]');

         if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Dashboard';
             // $this->load->view('template/header', $data);
             $this->load->view('store/signup', $data);
             // $this->load->view('template/footer', $data);
         } else {
          $data = array(
            'fname' => $this->input->post('auth_firstname'),
            'lname' => $this->input->post('auth_lastname'),
            'mname' => $this->input->post('auth_middlename'),
            'email' => $this->input->post('auth_email'),
            'username' => $this->input->post('auth_email'),
            'phone' => $this->input->post('auth_phoneNumber'),
            'password' => md5($this->input->post('auth_password'))

          );
          $this->db->insert('user_account', $data);
          die();
           $this->session->set_flashdata("register","Account Successfully Registered");
            // $this->Page_model->contact_us();
            $data['title'] = 'Dashboard';
             // $this->load->view('template/header', $data);
             $this->load->view('store/signup', $data);
             // $this->load->view('template/footer', $data);
                  }
                
             
              }


               public function check_username_exists($username)
                  {


                       $this->form_validation->set_message('check_username_exists', 'The Username Already Exits ');
                    if ($this->Page_model->check_username_exists($username)) {
                            return true;
                    }else{
                            return false;
                    }
                  }


                     public function admin_logout()
            {


              
              
                  
                $this->session->unset_userdata('admin_logged_in');
                  $this->session->unset_userdata('user_id');
                  $this->session->unset_userdata('username');
                  $this->session->unset_userdata('password');
                  $this->session->set_flashdata("logout","You have succesfully log out");
                
                        redirect('belbecadmin','refresh');
            }


               public function login()
              {
                  if ($this->session->userdata('account_logged_in') ) {
                 redirect('admin/dashboard','refresh');
                      }

                    $this->form_validation->set_rules('username', 'Username', 'trim|required');
                     $this->form_validation->set_rules('password', 'Password', 'trim|required');
                            if ($this->form_validation->run() == FALSE) {
                        $data['title'] = 'Dashboard';
                             // $this->load->view('template/header', $data);
                             $this->load->view('store/login', $data);
                             // $this->load->view('template/footer', $data);                            } else {
                            $username =  strtolower($this->input->post('username'));
                                 $password =  strtolower($this->input->post('password'));
                                 $pass = md5($password);

                          $user_id = $this->Page_model->admin_login($username,$pass);

                          if ($user_id) {
                            $user_data =array(
                              'user_id' => $user_id,
                              'username' => $username,
                              'password' => $password,
                              'account_logged_in' => TRUE
                            );
                            $this->session->set_userdata($user_data);
                           $data['title'] = 'Dashboard';
                            redirect('admin/index','refresh',$data);

                          }else{

                    $this->session->set_flashdata("login_failed","Invalid Username or Password");
                        $data['title'] = 'Dashboard';
             // $this->load->view('template/header', $data);
             $this->load->view('store/login', $data);
             // $this->load->view('template/footer', $data);
                            }
                 }

            
              }

              public function render()
              {
              $data['title'] = 'Render';
             $this->load->view('template/header', $data);
             $this->load->view('store/render', $data);
             $this->load->view('template/footer', $data);
              }

               public function request()
              {
              $data['title'] = 'Dashboard';
             $this->load->view('template/header', $data);
             $this->load->view('store/request', $data);
             $this->load->view('template/footer', $data);
              }

                 public function subscripition()
              {
              $data['title'] = 'subscripition';
             $this->load->view('template/header', $data);
             $this->load->view('store/subscripition', $data);
             $this->load->view('template/footer', $data);
              }


               public function forgot_password()
              {
                
              $data['title'] = 'Forgot Password';
             // $this->load->view('template/header', $data);
             $this->load->view('store/forgot_password', $data);
             // $this->load->view('template/footer', $data);
              }


}

?>