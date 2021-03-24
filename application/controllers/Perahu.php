<?php
    class Perahu extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Customer_m');
            $this->load->model('Perahu_m');
            date_default_timezone_set('Asia/Jakarta');
        }
    
        public function detail($id)
        {
            $datawhere = array(
                'perahu_id' => intval($id)
            );

            $data['perahu'] = $this->db->get_where('perahu',$datawhere)->result_array();
            
            if(count($data['perahu']) < 1){
                redirect('/');
            }
            
            $data2['title'] = "Detail ".$data['perahu'][0]['nama_perahu'];
            $data2['active']= 0;

            $this->load->view('layouts/header_v',$data2);

            $this->load->view('detail_v',$data);   
        }

        public function booking(){
            if(!$this->session->userdata('login')){
                redirect(base_url("/registrasi"));
            }

            $iduser         = $this->session->userdata('id');
            $idperahu       = $this->input->post('perahu_id');
            $tglpemesanan   = $this->input->post('tanggal_pemesanan');

            $perahu     = $this->db->get_where('perahu',array('perahu_id' => $idperahu))->result_array();
            $pengguna   = $this->db->get_where('customer',array('id_customer' => $iduser))->result_array();
            
            if(count($perahu) < 1){
                redirect('/');
            }

            $data = array(
                'customer_id'   => $iduser,
                'perahu_id'     => $idperahu,
                'order_status'  => 0,
                'biaya'         => $perahu[0]['harga']+$iduser+date('H')+$iduser+date('s'),
                'booking_at'    => $tglpemesanan,
                'created_at'    => date('Y-m-d H:i:s')
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

            $this->db->insert('order_perahu',$data);
            $pemesanan_id = $this->db->insert_id();

            $dataEmail['biaya']          = $data['biaya'];
            $dataEmail['verified_at']    = "";
            $dataEmail['created_at']     = $data['created_at'];
            $dataEmail['pemesanan_id']   = $pemesanan_id;
            $dataEmail['nama_perahu']    = $perahu[0]['nama_perahu'];
            $dataEmail['spesifikasi_perahu'] = $perahu[0]['spesifikasi_perahu'];
            $dataEmail['nama_pengguna']      = $pengguna[0]['nama'];
            $dataEmail['booking_at']         = $data['booking_at'];

            $this->email->initialize($config);
            $this->email->set_newline("\r\n");   

            $this->email->from('bookingkapal@gmail.com','Booking Kapal'); 
            $this->email->to($pengguna[0]['email']);
            $this->email->subject('Booking Kapal Invoice'); 
            $this->email->message($this->load->view('emails/invoice_v',$dataEmail,TRUE)); 


            //Send mail 
        
            if(!$this->email->send()){
                $this->session->set_flashdata('booking', 'gagal');
            }else{

                $this->db->where('pemesanan_id', $pemesanan_id);
                $this->session->set_flashdata('booking', 'berhasil');
            }

            
            redirect(base_url("/orders"));
        }
    }