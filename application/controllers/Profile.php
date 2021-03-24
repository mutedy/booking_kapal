<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_m');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if(!$this->session->userdata('login')){
            redirect(base_url("/"));
        }

        $iduser = $this->session->userdata('id');

        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where('id_customer',$iduser);
        
        $data['customer'] = $this->db->get()->result_array()[0];
        $data2['title'] = "Profile";
        $data2['active']= 1;
        
        $this->load->view('layouts/header_v',$data2);
        $this->load->view('profile_v',$data);
    }

    public function update(){
        
        if(!$this->session->userdata('login')){
            redirect(base_url("/"));
        }

        $iduser = $this->session->userdata('id');

        $foto       = $_FILES["foto_path"];

        $new_name   = "";
        $params;

        if($foto){
            
            $config['upload_path']          = './uploads/profile_user/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000000;
            $config['max_width']            = 1024000;
            $config['max_height']           = 7680000;
            
            $new_name = time().$iduser."profile.jpg";
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto_path')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('profile', 'error_foto');
                redirect(base_url("/profile"));
            }else{
                $data = array('upload_data' => $this->upload->data());
                // $this->load->view('v_upload_sukses', $data);
            }

            $params = array(
                'nama'          => $this->input->post('nama'),
                'no_telp'       => $this->input->post('no_telp'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'foto_path'     => $new_name,
                'alamat'        => $this->input->post('alamat')
            );
    
        }else{

            $params = array(
                'nama'          => $this->input->post('nama'),
                'no_telp'       => $this->input->post('no_telp'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat'        => $this->input->post('alamat')
            );
    
        }
        

       
        
        $this->db->where('id_customer', $iduser);
        $this->db->update('customer', $params);

        $this->session->set_flashdata('profile', 'berhasil');
        redirect(base_url("/profile"));
    }
    
  
}
