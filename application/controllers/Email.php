<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->library('email');

       
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => 'bookingkapal@gmail.com',
            'smtp_pass' => '1012muted',
            'mailtype'  => 'html', 
            'charset'   => 'utf-8'
        );

        
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");   

        $this->email->from('bookingkapal@gmail.com','Aplikasi Perahu'); 
        $this->email->to('didik.mulyadi@cartenz.co.id');
        $this->email->subject('Test Pengiriman Email'); 
        $this->email->message('<b>Bismillah</b>'); 

        echo "process";

        //Send mail 
        if($this->email->send()){
                echo "berhasil";
        }else {
                echo "gagal";
                var_dump($this->email->print_debugger());
                
        } 
    }
}