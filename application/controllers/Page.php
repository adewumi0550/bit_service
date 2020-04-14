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
                
              $data['title'] = 'Dashboard';
             // $this->load->view('template/header', $data);
             $this->load->view('store/signup', $data);
             // $this->load->view('template/footer', $data);
              }



               public function login()
              {
                
              $data['title'] = 'Dashboard';
             // $this->load->view('template/header', $data);
             $this->load->view('store/login', $data);
             // $this->load->view('template/footer', $data);
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