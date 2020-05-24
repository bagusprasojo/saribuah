<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $_SESSION['halaman_terakhir'] = "pembeli";
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        $this->load->model("pembeli_model");        
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_POST['btn_submit'])) {
			$data['nama'] = $this->input->post('cari');
			// se session userdata untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_nama', $data['nama']);
		}
		else {
			$data['nama'] = $this->session->userdata('sess_nama');
		}

        $jumlah_data = $this->pembeli_model->jumlah_data($data['nama']);

		$this->load->library('pagination');
		$config['base_url']     = base_url().'index.php/pembeli/index/';
		$config['total_rows']   = $jumlah_data;
        $config['per_page']     = 25;

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

		$from                   = $this->uri->segment(3);
        $this->pagination->initialize($config);		
        
        $data['pembelis'] = $this->pembeli_model->data($config['per_page'],$from, $data['nama']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_pembeli_list", $data);

    }

    public function add($id=null)
    { 
        $pembeli = $this->pembeli_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembeli->rules());

        if ($validation->run()) {
            if ($pembeli->save()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('pembeli');
                // return true;
            }            
        }

		$data["pembeli"] = $pembeli;
        $this->load->view("v_pembeli_input", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pembeli');
       
        $pembeli = $this->pembeli_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembeli->rules());

        if ($validation->run()) {
            $pembeli->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembeli"] = $pembeli->getById($id);
        if (!$data["pembeli"]) show_404();
        
        $this->load->view("v_pembeli_input", $data);
    }

    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        $this->db->trans_begin();        
        if ($this->pembeli_model->delete($id)) {
            $this->db->trans_commit();
            redirect(site_url('pembeli'));
        }

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
        }
    }
}