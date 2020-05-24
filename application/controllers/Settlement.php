<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settlement extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION['halaman_terakhir'] = "";
                
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) {
            $data['nama_view'] = "settlement";
            $this->load->view("v_login.php", $data);
        }
        
        $this->load->model("settlement_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_POST['btn_submit'])) {
			$data['nomor_settlement'] = $this->input->post('cari');
			$this->session->set_userdata('sess_nomor_settlement', $data['nomor_settlement']);
		}
		else {
			$data['nomor_settlement'] = $this->session->userdata('sess_nomor_settlement');
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

        $jumlah_data = $this->settlement_model->jumlah_data($tgl1, $tgl2, $data['nomor_settlement']);

        $config['base_url']     = base_url().'index.php/settlement/index/';
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
        
        $data['settlements'] = $this->settlement_model->data($config['per_page'],$from,$tgl1,$tgl2, $data['nomor_settlement']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_settlement_list", $data);

    }

    public function add(){
        $pembayaran_id = "";
        $this->db->trans_begin();

        $this->settlement_model->save($pembayaran_id,null );
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            redirect(site_url('pembayaran/settlement_piutang/'.$pembayaran_id));
        }        
    }

    public function delete($id=null)
    {        
        if (!isset($id)) show_404();
        
        $this->db->trans_begin();
        $this->settlement_model->delete($id);

        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            redirect(site_url('settlement'));
        }
    }
}