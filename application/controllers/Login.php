<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_m');
    }

	public function index()
	{
        if($this->session->userdata('login') === true){
            redirect(base_url("/"));
        }
        
        $data['title'] = "Login";
        $this->load->view('layouts/header_logreg_v',$data);
        $this->load->view('login_v');
        
    }
    
    public function login_process(){
        
        $this->load->library('user_agent');
        if ($this->agent->is_referral())
        {
            $refer =  $this->agent->referrer();
        }

        $email      = $this->input->post('email');
        $password   = md5($this->input->post('password'));

        $result     = $this->Customer_m->get_data_for_login($email,$password);
        
        if(count($result) > 0){
            
            if($result[0]['verify_at']){
                $data_session = array(
                    'id'   => $result[0]['id_customer'],
                    'login' => true
                );
     
                $this->session->set_userdata($data_session);
     
                redirect(base_url("/"));
            }else{
                $this->session->set_flashdata('verification', 'belum');

                redirect(base_url("/login"));
            }
            
        }else{

            $this->session->set_flashdata('login', 'error');
            redirect(base_url("/login"));
        }
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
