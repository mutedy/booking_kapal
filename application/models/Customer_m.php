<?php

class Customer_m extends CI_Model {
    private $table = "customer";

    public function get_data_for_login($email,$password){
        $data = array(
            'email' => $email,
            'password' => $password
        );

        return $this->db->get_where($this->table,$data)->result_array();
    }

    public function register($data){
        $this->db->insert($this->table,$data);
    }

    public function update($data,$id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}