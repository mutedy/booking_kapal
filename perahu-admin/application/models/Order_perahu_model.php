<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Order_perahu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get order_perahu by pemesanan_id
     */
    function get_order_perahu($pemesanan_id)
    {
        return $this->db->get_where('order_perahu',array('pemesanan_id'=>$pemesanan_id))->row_array();
    }
        
    /*
     * Get all order_perahu
     */
    function get_all_order_perahu()
    {
        $this->db->order_by('pemesanan_id', 'desc');
        return $this->db->get('order_perahu')->result_array();
    }
        
    /*
     * function to add new order_perahu
     */
    function add_order_perahu($params)
    {
        $this->db->insert('order_perahu',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update order_perahu
     */
    function update_order_perahu($pemesanan_id,$params)
    {
        $this->db->where('pemesanan_id',$pemesanan_id);
        return $this->db->update('order_perahu',$params);
    }
    
    /*
     * function to delete order_perahu
     */
    function delete_order_perahu($pemesanan_id)
    {
        return $this->db->delete('order_perahu',array('pemesanan_id'=>$pemesanan_id));
    }
}
