<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Order extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    } 

    /*
     * Listing of order
     */
    function index()
    {
        $data['order'] = $this->Order_model->get_all_order();
        
        $data['_view'] = 'order/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new order
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'customer_id' => $this->input->post('customer_id'),
				'perahu_id' => $this->input->post('perahu_id'),
				'created_at' => $this->input->post('created_at'),
				'verified_at' => $this->input->post('verified_at'),
				'order_status' => $this->input->post('order_status'),
				'biaya' => $this->input->post('biaya'),
				'bukti_pembayaran_path' => $this->input->post('bukti_pembayaran_path'),
            );
            
            $order_id = $this->Order_model->add_order($params);
            redirect('order/index');
        }
        else
        {            
            $data['_view'] = 'order/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a order
     */
    function edit($pemesanan_id)
    {   
        // check if the order exists before trying to edit it
        $data['order'] = $this->Order_model->get_order($pemesanan_id);
        
        if(isset($data['order']['pemesanan_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'customer_id' => $this->input->post('customer_id'),
					'perahu_id' => $this->input->post('perahu_id'),
					'created_at' => $this->input->post('created_at'),
					'verified_at' => $this->input->post('verified_at'),
					'order_status' => $this->input->post('order_status'),
					'biaya' => $this->input->post('biaya'),
					'bukti_pembayaran_path' => $this->input->post('bukti_pembayaran_path'),
                );

                $this->Order_model->update_order($pemesanan_id,$params);            
                redirect('order/index');
            }
            else
            {
                $data['_view'] = 'order/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The order you are trying to edit does not exist.');
    } 

    /*
     * Deleting order
     */
    function remove($pemesanan_id)
    {
        $order = $this->Order_model->get_order($pemesanan_id);

        // check if the order exists before trying to delete it
        if(isset($order['pemesanan_id']))
        {
            $this->Order_model->delete_order($pemesanan_id);
            redirect('order/index');
        }
        else
            show_error('The order you are trying to delete does not exist.');
    }
    
}