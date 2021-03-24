<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Registrasi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_m');
    }

	public function index()
	{
        if($this->session->userdata('login')){
            redirect(base_url("/"));
        }
        
        $data['title'] = "Registrasi";
        $this->load->view('layouts/header_logreg_v',$data);
        $this->load->view('registrasi_v');
    }
    
    public function registrasi_process(){
        date_default_timezone_set("Asia/Bangkok");
        
        $nama       = $this->input->post('nama');
        $password   = md5($this->input->post('password'));
        $email      = $this->input->post('email');
        $no_telp    = $this->input->post('notelp');

        $data['email']      = $email;
        $data['password']   = $password;
        $data['token']      = date('ymdHis');
        
        $data = array(
            'nama' => $nama,
            'password' => $password,
            'email' => $email,
            'no_telp' => $no_telp,
            'token' => $data['token']
        );

        $this->load->library('email');

       
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'bookingkapal@gmail.com',
            'smtp_pass' => '1012muted',
            'mailtype'  => 'html', 
            'charset' => 'iso-8859-1'
        );

        $this->email->initialize($config);
        $this->email->set_newline("\r\n");   

        $this->email->from('bookingkapal@gmail.com','Booking Kapal'); 
        $this->email->to($email);
        $this->email->subject('Verifikasi Akun Booking Kapal'); 
        $this->email->message($this->load->view('emails/registrasi_v',$data,TRUE)); 


        //Send mail 
       
        if(!$this->email->send()){
            $this->session->set_flashdata('registrasi', 'gagal');
        }else{
            $this->session->set_flashdata('registrasi', 'berhasil');
            $this->Customer_m->register($data);
            
        }

        // END PHP MAILER SETUP
        
        redirect(base_url('registrasi'));
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
    }
    
    public function verification(){
        $token       = $this->input->get('token');

        $this->db->where('token',$token);
        $user = $this->db->get('customer')->result_array();
        if(count($user) > 0){
            if($user[0]['verify_at'] == ""){
                $params = array(
                    'verify_at' => date('Y-m-d H:i:s') 
                );
    
                $this->db->where('id_customer', $user[0]['id_customer']);
                $this->db->update('customer', $params);
                $this->session->set_flashdata('verification', 'berhasil');
            }else{
                $this->session->set_flashdata('verification', 'sudah');
            }
            
        }else{
            $this->session->set_flashdata('verification', 'gagal');
        }

        redirect(base_url('login'));
    }
}
