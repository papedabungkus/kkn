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
        $this->load->model('Dosen_model');
        $nim = $this->input->post('nim');
        $password = $this->input->post('password');

        if(strlen($nim)==9)
        {
            $where = array(
                'nim' => $nim,
                'password' => md5($password),
            );
            $cek = $this->Mahasiswa_model->cek_login("mahasiswa",$where)->num_rows();
            $data_mhs = $this->Mahasiswa_model->get_mahasiswa($nim);
            $data_session = array(
                'nim' => $nim,
                'nama' => $data_mhs['nama_mhs'],
                'status' => 'login',
                'level' => 'mahasiswa',
                'prodi' => $data_mhs['prodi'],
            );
            $akses = 'aksesmahasiswa';

        } 
        else 
        {
            $where = array(
                'nip' => $nim,
                'password' => md5($password),
            );
            $cek = $this->Dosen_model->cek_login("dosen",$where)->num_rows();
            $data_dosen = $this->Dosen_model->get_dosen($nip);
            $data_session = array(
                'nip' => $nim,
                'nama' => $data_dosen['nama_dosen'],
                'status' => 'login',
                'level' => 'dosen',
            );
            $akses = 'aksesdosen';

        }
        if($cek > 0)
        {
            $this->session->set_userdata($data_session);   
            redirect($akses);
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
