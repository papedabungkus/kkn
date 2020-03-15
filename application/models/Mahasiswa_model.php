<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mahasiswa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    } 
    
    /*
     * Get mahasiswa by nim
     */
    function get_mahasiswa($nim)
    {
        return $this->db->get_where('mahasiswa',array('nim'=>$nim))->row_array();
    }
        
    /*
     * Get all mahasiswa
     */
    function get_all_mahasiswa()
    {
        $this->db->order_by('nim', 'desc');
        return $this->db->get('mahasiswa')->result_array();
    }
        
    /*
     * function to add new mahasiswa
     */
    function add_mahasiswa($params)
    {
        $this->db->insert('mahasiswa',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update mahasiswa
     */
    function update_mahasiswa($nim,$params)
    {
        $this->db->where('nim',$nim);
        return $this->db->update('mahasiswa',$params);
    }
    
    /*
     * function to delete mahasiswa
     */
    function delete_mahasiswa($nim)
    {
        return $this->db->delete('mahasiswa',array('nim'=>$nim));
    }
}
