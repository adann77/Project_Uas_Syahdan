<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  public function __construct()
  {
      parent::__construct();
      $this->load->model('m_user');
      
     

  }

    public function login_user()
    {
      $this->form_validation->set_rules('username', 'Username', 'required', array(
        'required' => '%s Harus Diisi !!!'
      ));

      $this->form_validation->set_rules('password', 'Password', 'required', array(
        'required' => '%s Harus Diisi !!!'
      ));

      
      if ($this->form_validation->run() == TRUE) {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->user_login->login($username, $password);


      } 

        $data = array(
            'title' => 'Login User', 
        
        );
        $this->load->view('v_login_user', $data, FALSE);
        
     
      }

      public function logout_user()
      {
        $this->user_login->logout();

      }

      public function regis(){
        
        $this->load->view('view_regis');


      }
      public function add()
    {

        $data = array(
            'nama_user' => $this->input->post('nama_user'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level_user' => '2'
         );
         $this-> m_user->add($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
         redirect('Auth/login_user');
         
    }  
    }

