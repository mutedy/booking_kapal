<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Customer extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
    } 

    /*
     * Listing of customer
     */
    function index()
    {
        $data['customer'] = $this->Customer_model->get_all_customer();
        
        $data['_view'] = 'customer/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new customer
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'token' => $this->input->post('token'),
				'no_telp' => $this->input->post('no_telp'),
				'created_at' => $this->input->post('created_at'),
				'updated_at' => $this->input->post('updated_at'),
				'verify_at' => $this->input->post('verify_at'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'foto_path' => $this->input->post('foto_path'),
				'alamat' => $this->input->post('alamat'),
            );
            
            $customer_id = $this->Customer_model->add_customer($params);
            redirect('customer/index');
        }
        else
        {            
            $data['_view'] = 'customer/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a customer
     */
    function edit($id_customer)
    {   
        // check if the customer exists before trying to edit it
        $data['customer'] = $this->Customer_model->get_customer($id_customer);
        
        if(isset($data['customer']['id_customer']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'token' => $this->input->post('token'),
					'no_telp' => $this->input->post('no_telp'),
					'created_at' => $this->input->post('created_at'),
					'updated_at' => $this->input->post('updated_at'),
					'verify_at' => $this->input->post('verify_at'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'foto_path' => $this->input->post('foto_path'),
					'alamat' => $this->input->post('alamat'),
                );

                $this->Customer_model->update_customer($id_customer,$params);            
                redirect('customer/index');
            }
            else
            {
                $data['_view'] = 'customer/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The customer you are trying to edit does not exist.');
    } 

    /*
     * Deleting customer
     */
    function remove($id_customer)
    {
        $customer = $this->Customer_model->get_customer($id_customer);

        // check if the customer exists before trying to delete it
        if(isset($customer['id_customer']))
        {
            $this->Customer_model->delete_customer($id_customer);
            redirect('customer/index');
        }
        else
            show_error('The customer you are trying to delete does not exist.');
    }
    
}