<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        //$_SESSION['halaman_terakhir'] = "/";
        
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        if (isset($_POST['btn_submit'])) {
			$data['nomor_transaksi'] = $this->input->post('cari');
			$this->session->set_userdata('sess_nomor_transaksi', $data['nomor_transaksi']);
		}
		else {
			$data['nomor_transaksi'] = $this->session->userdata('sess_nomor_transaksi');
		}
        
        $this->load->library('pagination');
        $this->load->helper('date');
		$from                   = $this->uri->segment(3);
        $tgl1                   = $this->uri->segment(4);

        if (empty($tgl1)){
            $tgl1 = mdate();
        }

        $tgl2                   = $this->uri->segment(5);
        if (empty($tgl2)){
            $tgl2 = mdate();
        }

        //echo "from : " . $from . "<br>";
        //echo "tgl1 : " . $tgl1 . "<br>";

        $jumlah_data = $this->user_model->jumlah_data($tgl1, $tgl2, $data['nomor_transaksi']);

        $config['base_url']     = base_url().'index.php/user/index/';
		$config['total_rows']   = $jumlah_data;
        $config['per_page']     = 10;

        $config['next_link'] = 'Selanjutnya';
        $config['prev_link'] = 'Sebelumnya';
        $config['first_link'] = 'Awal';
        $config['last_link'] = 'Akhir';
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close'] = '</span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tag_open'] = '</span></li>';

        
        $this->pagination->initialize($config);		
        
        $data['users'] = $this->user_model->data($config['per_page'],$from,$tgl1,$tgl2, $data['nomor_transaksi']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_user_list", $data);

    }

    public function login(){

        if($this->input->post()){
            if($this->user_model->doLogin()) redirect(site_url($_SESSION['halaman_terakhir']));
        }

        $this->load->view("v_login.php");
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(site_url('user/login'));
	}

    public function add($id=null)
    { 
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            if ($user->save()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('user');
                // return true;
            }            
        }

		$data["user"] = $user;
        $this->load->view("v_user_input", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->user_model->search_user($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'         => $row->nama,
                        'description'   => $row->user_id,
                 );
                    echo json_encode($arr_result);
            }
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('user');
       
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"]        = $user->getById($id);
        $data["nama_user"]   = $data["user"]->nama;
        if (!$data["user"]) show_404();
        
        $this->load->view("v_user_input", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('user'));
        }
    }
}