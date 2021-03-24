<?php
    class Orders extends CI_Controller {
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            
            if(!$this->session->userdata('login')){
                redirect(base_url("/"));
            }

            $iduser         = $this->session->userdata('id');
            $data2['title']  = "Orders";
            $data2['active']= 2;

            $data['orders'] = $this->db->query("select op.*, p.nama_perahu from order_perahu as op inner join customer as c on c.id_customer = op.customer_id inner join perahu as p on p.perahu_id = op.perahu_id where c.id_customer = '".$iduser."' order by pemesanan_id desc, order_status asc")->result_array();

            $this->load->view('layouts/header_v',$data2);
            $this->load->view('order_v',$data);

        }

        public function upload_bukti(){
            if(!$this->session->userdata('login')){
                redirect(base_url("/"));
            }

            $new_name   = "";
            $config['upload_path']          = './uploads/bukti_pembayaran/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1000000;
            $config['max_width']            = 1024000;
            $config['max_height']           = 7680000;
            
            $new_name = time().$iduser."bukti.jpg";
            $config['file_name'] = $new_name;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto_path')){
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('bukti', 'error_foto');
                redirect(base_url("/orders"));
            }else{
                $data = array('upload_data' => $this->upload->data());
                // $this->load->view('v_upload_sukses', $data);
            }

            $params = array(
                'bukti_pembayaran_path'          => $new_name,
                'uploaded_at'   => date('Y-m-d H:i:s'),
                'order_status'  => 1
            );

            $iduser         = $this->session->userdata('id');
            $idpemesanan    = $this->input->post('pemesanan_id');

            $this->db->where('customer_id', $iduser);
            $this->db->where('pemesanan_id', $idpemesanan);
            $this->db->update('order_perahu', $params);
    
            $this->session->set_flashdata('bukti', 'berhasil');
            redirect(base_url("/orders"));
        }
        public function batal(){
            $idpemesanan    = $this->input->post('pemesanan_id');
            $params = array(
                'order_status'  => 3
            );
            $this->db->where('pemesanan_id', $idpemesanan);
            $this->db->update('order_perahu', $params);
            redirect(base_url("/orders"));
        }
    }