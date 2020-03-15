<?php
 
class Aksesdosen extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect('home');
		}
        $this->load->model('Lap_skripsi_model');
        $this->load->model('Lap_ta_model');
        $this->load->model('Lap_kkn_model');
        $this->load->model('Lap_kp_model');
        $this->load->model('Dosen_model');
    }

    function index()
    {
        $data['_view'] = 'aksesdosen/home';
        $this->load->view('aksesdosen/layouts/main',$data);
    }
}

