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
        $this->load->model('Lap_kp_s1_model');
        $this->load->model('Lap_kp_d3_model');
        $this->load->model('Dosen_model');
    }

    function index()
    {
        $data['_view'] = 'aksesdosen/home';
        $this->load->view('aksesdosen/layouts/main',$data);
    }

    function bimbingand3()
    {
        $data['_view'] = 'aksesdosen/bimbingand3';
        $this->load->view('aksesdosen/layouts/main',$data);
    }

    function bimbingans1()
    {
        $jenislaporan = $this->input->post('jenislaporan');
        if($jenislaporan=="kp")
        {
            $laporan = $this->Lap_kp_s1_model->get_all_lap_kp_s1();
        }
        elseif($jenislaporan=="skripsi")
        {
            $laporan = $this->Lap_skripsi_model->get_all_lap_skripsi();
        }
        else
        {
            $laporan = "";
        }
        $data = array(
            'jenislaporan' => $jenislaporan,
            'laporan' => $laporan,
            '_view' => 'aksesdosen/bimbingans1',
        );
        $this->load->view('aksesdosen/layouts/main',$data);
    }
}

