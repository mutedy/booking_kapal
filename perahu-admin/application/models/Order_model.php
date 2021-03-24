<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Order_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get order by pemesanan_id
     */
    function get_order($pemesanan_id)
    {
        return $this->db->get_where('order_perahu',array('pemesanan_id'=>$pemesanan_id))->row_array();
    }
        
    /*
     * Get all order
     */
    function get_all_order()
    {
        $this->db->order_by('pemesanan_id', 'desc');
        return $this->db->get('order_perahu')->result_array();
    }
        
    /*
     * function to add new order
     */
    function add_order($params)
    {
        $this->db->insert('order_perahu',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update order
     */
    function update_order($pemesanan_id,$params)
    {
        $this->db->where('pemesanan_id',$pemesanan_id);
        return $this->db->update('order_perahu',$params);
    }
    
    /*
     * function to delete order
     */
    function delete_order($pemesanan_id)
    {
        return $this->db->delete('order_perahu',array('pemesanan_id'=>$pemesanan_id));
    }
}
