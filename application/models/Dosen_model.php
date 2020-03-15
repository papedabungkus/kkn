<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dosen_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dosen by id_dosen
     */
    function get_dosen($id_dosen)
    {
        return $this->db->get_where('dosen',array('id_dosen'=>$id_dosen))->row_array();
    }
        
    /*
     * Get all dosen
     */
    function get_all_dosen()
    {
        $this->db->order_by('id_dosen', 'desc');
        return $this->db->get('dosen')->result_array();
    }
        
    /*
     * function to add new dosen
     */
    function add_dosen($params)
    {
        $this->db->insert('dosen',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dosen
     */
    function update_dosen($id_dosen,$params)
    {
        $this->db->where('id_dosen',$id_dosen);
        return $this->db->update('dosen',$params);
    }
    
    /*
     * function to delete dosen
     */
    function delete_dosen($id_dosen)
    {
        return $this->db->delete('dosen',array('id_dosen'=>$id_dosen));
    }
}
