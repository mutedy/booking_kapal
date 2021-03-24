<?php

class Perahu_m extends CI_Model {
    private $table = "perahu";

    public function selectAll(){
        return $this->db->get($this->table)->result_array();
    }
}