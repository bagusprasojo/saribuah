<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Piutang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION['halaman_terakhir'] = "piutang";

        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('user/login'));
        
        $this->load->model("piutang_model");
        
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

        $jumlah_data = $this->piutang_model->jumlah_data($tgl1, $tgl2, $data['nomor_transaksi']);

        $config['base_url']     = base_url().'index.php/piutang/index/';
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
        
        $data['piutangs'] = $this->piutang_model->data($config['per_page'],$from,$tgl1,$tgl2, $data['nomor_transaksi']);
        $data['pagination'] = $this->pagination->create_links();
        $data['total_sisa_piutang'] = $this->piutang_model->get_total_piutang_belum_lunas();
        $this->load->view("v_piutang_list", $data);

    }

    public function add($id=null)
    { 
        $piutang = $this->piutang_model;
        $validation = $this->form_validation;
        $validation->set_rules($piutang->rules());

        $post = $this->input->post();

        if ($post){
            $id = $post["piutang_id"];
            
            
            /*
            $this->piutang_id 	    = $post["piutang_id"];
            $this->pembeli_id 	    = $post["pembeli_id"];
            $this->no_transaksi 	= $post["no_transaksi"];
            $this->tgl_transaksi 	= $post["tgl_transaksi"];
            $this->nominal 	        = $post["nominal"];



            $piutangs = "ID : " . $this->piutang_id . "<br>" .
                        "Pembeli ID : " . $this->pembeli_id . "<br>" .
                        "no_transaksi : " . $this->no_transaksi . "<br>" .
                        "tgl_transaksi : " . $this->tgl_transaksi . "<br>" .
                        "nominal : " . $this->nominal . "<br>" ;
            */
            
            //echo $piutangs;
        }



        if ($validation->run()) {
            if ($piutang->save()) {
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('piutang');
                // return true;
            }            
        }

        $piutang->tgl_transaksi = date("Y-m-d");
        $piutang->no_transaksi = "Otomatis";

        $data["piutang"]        = $piutang;
        $data["nama_pembeli"]   = "";
        $this->load->view("v_piutang_input", $data);
    }

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->piutang_model->search_pembeli($_GET['term']);
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
        if (!isset($id)) redirect('piutang');
       
        $piutang = $this->piutang_model;
        $validation = $this->form_validation;
        $validation->set_rules($piutang->rules());

        if ($validation->run()) {
            $piutang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["piutang"]        = $piutang->getById($id);
        $data["nama_pembeli"]   = $data["piutang"]->nama;
        if (!$data["piutang"]) show_404();
        
        $this->load->view("v_piutang_input", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->piutang_model->delete($id)) {
            redirect(site_url('piutang'));
        }
    }
}