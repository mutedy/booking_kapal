<?php
    class Home extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Customer_m');
            $this->load->model('Perahu_m');
        }
    
        public function index()
        {
            $data['perahu'] = $this->Perahu_m->selectAll();
            $data2['title'] = "Home";
            $data2['active']= 0;

            $this->load->view('layouts/header_v',$data2);
            $this->load->view('home_v',$data);
        }
    } 