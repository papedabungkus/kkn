<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lap_kp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lap_kp_model');
    } 

    /*
     * Listing of lap_kp
     */
    function index()
    {
        $data['lap_kp'] = $this->Lap_kp_model->get_all_lap_kp();
        
        $data['_view'] = 'backend/lap_kp/index';
        $this->load->view('backend/layouts/main',$data);
    }

    /*
     * Adding a new lap_kp
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nim' => $this->input->post('nim'),
				'judul_laporan' => $this->input->post('judul_laporan'),
				'jenis_laporan' => $this->input->post('jenis_laporan'),
				'tgl_upload' => $this->input->post('tgl_upload'),
				'dospem_1' => $this->input->post('dospem_1'),
				'dospem_2' => $this->input->post('dospem_2'),
				'kategori_laporan' => $this->input->post('kategori_laporan'),
				'upload_laporan' => $this->input->post('upload_laporan'),
				'notifikasi' => $this->input->post('notifikasi'),
            );
            
            $lap_kp_id = $this->Lap_kp_model->add_lap_kp($params);
            redirect('lap_kp/index');
        }
        else
        {            
            $data['_view'] = 'backend/lap_kp/add';
            $this->load->view('backend/layouts/main',$data);
        }
    }  

    /*
     * Editing a lap_kp
     */
    function edit($id_laporan)
    {   
        // check if the lap_kp exists before trying to edit it
        $data['lap_kp'] = $this->Lap_kp_model->get_lap_kp($id_laporan);
        
        if(isset($data['lap_kp']['id_laporan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nim' => $this->input->post('nim'),
					'judul_laporan' => $this->input->post('judul_laporan'),
					'jenis_laporan' => $this->input->post('jenis_laporan'),
					'tgl_upload' => $this->input->post('tgl_upload'),
					'dospem_1' => $this->input->post('dospem_1'),
					'dospem_2' => $this->input->post('dospem_2'),
					'kategori_laporan' => $this->input->post('kategori_laporan'),
					'upload_laporan' => $this->input->post('upload_laporan'),
					'notifikasi' => $this->input->post('notifikasi'),
                );

                $this->Lap_kp_model->update_lap_kp($id_laporan,$params);            
                redirect('lap_kp/index');
            }
            else
            {
                $data['_view'] = 'backend/lap_kp/edit';
                $this->load->view('backend/layouts/main',$data);
            }
        }
        else
            show_error('The lap_kp you are trying to edit does not exist.');
    } 

    /*
     * Deleting lap_kp
     */
    function remove($id_laporan)
    {
        $lap_kp = $this->Lap_kp_model->get_lap_kp($id_laporan);

        // check if the lap_kp exists before trying to delete it
        if(isset($lap_kp['id_laporan']))
        {
            $this->Lap_kp_model->delete_lap_kp($id_laporan);
            redirect('lap_kp/index');
        }
        else
            show_error('The lap_kp you are trying to delete does not exist.');
    }
    
}
