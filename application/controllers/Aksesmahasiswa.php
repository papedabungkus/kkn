<?php
 
class Aksesmahasiswa extends CI_Controller{
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
        $data['_view'] = 'aksesmahasiswa/home';
        $this->load->view('aksesmahasiswa/layouts/main',$data);
    }

    function laporan()
    {
        $nim = $this->session->userdata('nim');
        $data = array(
            'lap_skripsi' => $this->Lap_skripsi_model->get_lap_skripsi_by_nim($nim),
            'lap_tugasakhir' => $this->Lap_ta_model->get_lap_ta_by_nim($nim),
            'lap_kkn' => $this->Lap_kkn_model->get_lap_kkn_by_nim($nim),
            'lap_kerjapraktek' => $this->Lap_kp_model->get_lap_kp_by_nim($nim),
            '_view' => 'aksesmahasiswa/laporan',
        );
        $this->load->view('aksesmahasiswa/layouts/main',$data);
    }

    function uploadlaporan()
    {
        $data = array(
            'dosen' => $this->Dosen_model->get_all_dosen(),
            'lap_skripsi' => $this->Lap_skripsi_model->get_all_lap_skripsi(),
            '_view' => 'aksesmahasiswa/uploadlaporan',
        );
        $this->load->view('aksesmahasiswa/layouts/main',$data);
    }

    function filelaporan($jenislaporan)
    {
        if($jenislaporan=="kp")
        {
            $config['upload_path'] = './file/kp/';
        }
        elseif($jenislaporan =="ta")
        {
            $config['upload_path'] = './file/ta/';
        }
        elseif($jenislaporan=="kkn")
        {
            $config['upload_path'] = './file/kkn/';
        }
        elseif($jenislaporan=="skripsi")
        {
            $config['upload_path'] = './file/skripsi/';
        }
        $config['allowed_types']        = 'doc|docx|pdf';
        $config['overwrite']			= true;
        $config['max_size']             = 10000; 

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            return $this->upload->data("file_name");
        }
    }

    function savelaporan()
    {
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $jenislaporan = $this->input->post('jenislaporan');
            $this->filelaporan($jenislaporan);
            $params = array(
                'nim' => $this->session->userdata('nim'),
				'judul_laporan' => $this->input->post('judul'),
				'abstrak_laporan' => $this->input->post('abstrak'),
				'dospem_1' => $this->input->post('dospem1'),
				'dospem_2' => $this->input->post('dospem2'),
                'tgl_upload' => date("Y-m-d"),
                'file' => $_FILES['file']['name']
            );
            if($jenislaporan=="kp")
            {
                $mahasiswa_id = $this->Lap_kp_model->add_lap_kp($params);
            }
            elseif($jenislaporan =="ta")
            {
                $mahasiswa_id = $this->Lap_ta_model->add_lap_ta($params);
            }
            elseif($jenislaporan=="kkn")
            {
                $mahasiswa_id = $this->Lap_kkn_model->add_lap_kkn($params);
            }
            elseif($jenislaporan=="skripsi")
            {
                $mahasiswa_id = $this->Lap_skripsi_model->add_lap_skripsi($params);
            }
                       
            redirect('aksesmahasiswa/laporan');
        }
        else
        {                        
            redirect('aksesmahasiswa/uploadlaporan');
        }
    }

    function skripsi()
    {
        $nim = $this->session->userdata('nim');
        $data = array(
            'komentar' => $this->Lap_skripsi_model->get_comments($nim),
            'lap_skripsi' => $this->Lap_skripsi_model->get_lap_skripsi_by_nim($nim),
            '_view' => 'aksesmahasiswa/skripsi',
        );
        
        $this->load->view('aksesmahasiswa/layouts/main',$data);

    }

    function kkn()
    {
        $nim = $this->session->userdata('nim');
        $data = array(
            'lap_kkn' => $this->Lap_kkn_model->get_lap_kkn_by_nim($nim),
            '_view' => 'aksesmahasiswa/kkn',
        );
        
        $this->load->view('aksesmahasiswa/layouts/main',$data);

    }

    function tugasakhir()
    {
        $nim = $this->session->userdata('nim');
        $data = array(
            'lap_tugasakhir' => $this->Lap_ta_model->get_lap_ta_by_nim($nim),
            '_view' => 'aksesmahasiswa/tugasakhir',
        );
        
        $this->load->view('aksesmahasiswa/layouts/main',$data);

    }

    function kerjapraktek()
    {
        $nim = $this->session->userdata('nim');
        $data = array(
            'lap_kerjapraktek' => $this->Lap_kp_model->get_lap_kp_by_nim($nim),
            '_view' => 'aksesmahasiswa/kerjapraktek',
        );
        
        $this->load->view('aksesmahasiswa/layouts/main',$data);

    }
}
