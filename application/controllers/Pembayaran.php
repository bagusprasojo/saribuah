<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION['halaman_terakhir'] = "pembayaran";
        
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) {
            $data['nama_view'] = "pembayaran";
            $this->load->view("v_login.php", $data);
        }
        
        $this->load->model("pembayaran_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if (isset($_POST['btn_submit'])) {
			$data['nomor_pembayaran'] = $this->input->post('cari');
			$this->session->set_userdata('sess_nomor_pembayaran', $data['nomor_pembayaran']);
		}
		else {
			$data['nomor_pembayaran'] = $this->session->userdata('sess_nomor_pembayaran');
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

        $jumlah_data = $this->pembayaran_model->jumlah_data($tgl1, $tgl2, $data['nomor_pembayaran']);

        $config['base_url']     = base_url().'index.php/pembayaran/index/';
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
        
        $data['pembayarans'] = $this->pembayaran_model->data($config['per_page'],$from,$tgl1,$tgl2, $data['nomor_pembayaran']);
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("v_pembayaran_list", $data);

    }

    public function bayar_piutang(){
        $post = $this->input->post();
        
        $snomor = "";

        if (isset($post["btn1"])){
            $snomor = 1;
        } elseif (isset($post["btn2"])) {
            $snomor = 2;
        } elseif (isset($post["btn3"])) {
            $snomor = 3;
        } elseif (isset($post["btn4"])) {
            $snomor = 4;
        } elseif (isset($post["btn5"])) {
            $snomor = 5;
        } elseif (isset($post["btn6"])) {
            $snomor = 6;
        } elseif (isset($post["btn7"])) {
            $snomor = 7;
        } elseif (isset($post["btn9"])) {
            $snomor = 8;
        } elseif (isset($post["btn9"])) {
            $snomor = 9;
        }

        $nama_input_pembayaran = "pembayaran_id" . $snomor;
        $nama_input_piutang = "piutang_id" . $snomor;
        $nama_input_nominal = "nominal" . $snomor;

        echo $nama_input_pembayaran . ": ";
        echo $post[$nama_input_pembayaran] . "<br>";
        
        echo $nama_input_piutang . ": ";        
        echo $post[$nama_input_piutang] . "<br>";

        echo $nama_input_nominal . ": ";        
        echo $post[$nama_input_nominal] . "<br>";

        /*
        $this->db->trans_begin();
 
        $this->db->query('AN SQL QUERY...');
        $this->db->query('ANOTHER QUERY...');
        $this->db->query('AND YET ANOTHER QUERY...');
        
        if ($this->db->trans_status() === FALSE)
        {
        $this->db->trans_rollback();
        }
        else
        {
        $this->db->trans_commit();
        }
        */
    }

    public function settlement_piutang($pembayaran_id){
        if ($pembayaran_id == ""){
            redirect(site_url('pembayaran'));
        }

        $this->load->model("piutang_model");

        $pembayaran         = $this->pembayaran_model;
        $data['pembayaran'] = $pembayaran->getById($pembayaran_id);

        if ($data['pembayaran'] == null){
            redirect(site_url('pembayaran'));
        }

        $data['piutangs']   = $this->piutang_model->piutang_belum_lunas($data['pembayaran']->pembeli_id);  
        $this->load->view("v_piutang_outstanding",$data);
    }

    public function rincian_bayar($pembayaran_id){
        if ($pembayaran_id == ""){
            redirect(site_url('pembayaran'));
        }
        
        $pembayaran         = $this->pembayaran_model;
        $data['pembayaran'] = $pembayaran->getById($pembayaran_id);

        if ($data['pembayaran'] == null){
            redirect(site_url('pembayaran'));
        }

        $this->load->model("settlement_model");
        $data['settlements']   = $this->settlement_model->daftar_settlement($pembayaran_id);  
        $this->load->view("v_settlement_list_by_pembayaran",$data);
    }

    public function add($id=null)
    { 
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        $post = $this->input->post();

        if ($post){
            $id = $post["pembayaran_id"];            
            
            $this->pembayaran_id 	= $post["pembayaran_id"];
            $this->pembeli_id 	    = $post["pembeli_id"];
            $this->no_pembayaran 	= $post["no_pembayaran"];
            $this->tgl_transaksi 	= $post["tgl_transaksi"];
            $this->nominal 	        = $post["nominal"];


            $pembayarans = "ID : " . $this->pembayaran_id . "<br>" .
                        "Pembeli ID : " . $this->pembeli_id . "<br>" .
                        "no_transaksi : " . $this->no_pembayaran . "<br>" .
                        "tgl_transaksi : " . $this->tgl_transaksi . "<br>" .
                        "nominal : " . $this->nominal . "<br>" ;

            //echo $pembayarans;
        }

        if ($validation->run()) {
            if ($pembayaran->save()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('pembayaran');
                // return true;
            }            
        }

        $pembayaran->tgl_transaksi = date("Y-m-d");
        $pembayaran->no_pembayaran = "Otomatis";

        $data["pembayaran"]     = $pembayaran;
        $data["nama_pembeli"]   = "";
        $this->load->view("v_pembayaran_input", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->pembayaran_model->search_pembeli($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'         => $row->nama,
                        'description'   => $row->pembeli_id,
                 );
                    echo json_encode($arr_result);
            }
        }
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pembayaran');
       
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembayaran"]   = $pembayaran->getById($id);
        $data["nama_pembeli"] = $data["pembayaran"]->nama_pembeli;
        
        if (!$data["pembayaran"]) show_404();
        
        $this->load->view("v_pembayaran_input", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pembayaran_model->delete($id)) {
            redirect(site_url('pembayaran'));
        }
    }
}