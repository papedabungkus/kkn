<?php
 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $data['_view'] = 'frontend/home';
        $this->load->view('frontend/layouts/main',$data);
    }

    function laporanskripsi()
    {
        $this->load->model('Lap_skripsi_model');
        $data = array(
            'lap_skripsi' => $this->Lap_skripsi_model->get_all_lap_skripsi(),
            '_view' => 'frontend/laporanskripsi',
        );
        
        $this->load->view('frontend/layouts/main',$data);
    }

    function laporantugasakhir()
    {
        $this->load->model('Lap_ta_model');
        $data = array(
            'lap_tugasakhir' => $this->Lap_ta_model->get_all_lap_ta(),
            '_view' => 'frontend/laporantugasakhir',
        );
        
        $this->load->view('frontend/layouts/main',$data);
    }
    function laporankkn()
    {
        $this->load->model('Lap_kkn_model');
        $data = array(
            'lap_kkn' => $this->Lap_kkn_model->get_all_lap_kkn(),
            '_view' => 'frontend/laporankkn',
        );
        
        $this->load->view('frontend/layouts/main',$data);
    }
    function laporankerjapraktek()
    {
        $this->load->model('Lap_kp_model');
        $data = array(
            'lap_kerjapraktek' => $this->Lap_kp_model->get_all_lap_kp(),
            '_view' => 'frontend/laporankp',
        );
        
        $this->load->view('frontend/layouts/main',$data);
    }

    function signup()
    {
        $this->load->model('Mahasiswa_model');
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'nim' => $this->input->post('nim'),
				'nama_mhs' => $this->input->post('nama_mhs'),
				'password' => md5($this->input->post('password')),
				'prodi' => $this->input->post('prodi'),
            );
            $mahasiswa_id = $this->Mahasiswa_model->add_mahasiswa($params);
           
            redirect('aksesmahasiswa');
        }
        else
        {                        
            redirect('home');
        }
    }

    function signin()
    {
        $this->load->model('Mahasiswa_model');
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');
        
        $where = array(
            'nim' => $nim,
            'password' => md5($password),
            );
        $cek = $this->Mahasiswa_model->cek_login("mahasiswa",$where)->num_rows();
        if($cek > 0)
        {
            $data_mhs = $this->Mahasiswa_model->get_mahasiswa($nim);
            $data_session = array(
                'nim' => $nim,
                'nama' => $data_mhs['nama_mhs'],
                'status' => 'login',
                'level' => 'mahasiswa',
                'prodi' => $data_mhs['prodi'],
                );

            $this->session->set_userdata($data_session);   
            redirect('aksesmahasiswa');
        }
        else
        {
            echo "<script>alert('Username atau password salah !');</script>";
            redirect('home');
        }
    }

    function signout(){
		$this->session->sess_destroy();
		redirect('home');
	}
}
