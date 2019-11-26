<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class M_login extends CI_Model{
    function read($where="", $order="") {
        if ( !empty($where) ) $this->db->where($where);
        if ( !empty($order) ) $this->db->where($order);
        
        $query = $this->db->get("login");
        
        if ($query AND $query->num_rows() !=0 ){
         return $query->result();
        } else {
         return array();
        }
        
    }

}