<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $_SESSION['halaman_terakhir'] = "";
        $this->load->model("user_model");
                
        $this->load->library('Pdf');
        if($this->user_model->isNotLogin()) {
            $data['nama_view'] = "Laporan";
            $this->load->view("v_login.php", $data);
        }
    }

    public function rekap_transaksi(){
        $post = $this->input->post();

        if ($post){
            $periode1       = $post["periode1"];
            $periode2       = $post["periode2"];

            $this->load->model("pembayaran_model");
            
            $data['pembayarans']    = $this->pembayaran_model->pembayaran_per_periode($periode1, $periode2);
            $data['periode1']       = $periode1;
            $data['periode2']       = $periode2;
             
             $this->load->view("v_pembayaran_per_periode_pdf.php", $data);
        }

        $this->load->view("v_rekap_transaksi.php");
    }


    public function pembayaran_per_periode(){
        $post = $this->input->post();

        if ($post){
            $periode1       = $post["periode1"];
            $periode2       = $post["periode2"];

            $this->load->model("pembayaran_model");
            
            $data['pembayarans']    = $this->pembayaran_model->pembayaran_per_periode($periode1, $periode2);
            $data['periode1']       = $periode1;
            $data['periode2']       = $periode2;
             
             $this->load->view("v_pembayaran_per_periode_pdf.php", $data);
        }

        $this->load->view("v_pembayaran_per_periode.php");
    }

    public function totalPiutang(){
        $this->load->model("piutang_model");
            
        $data['piutangs'] = $this->piutang_model->getListTotalPiutang();
        $this->load->view("v_total_piutang_pdf.php", $data);
    }

    public function piutang_per_periode(){
        $post = $this->input->post();

        if ($post){
            $pembeli_id = $post["pembeli_id"];
            $periode1   = $post["periode1"];
            $periode2   = $post["periode2"];

            $this->load->model("pembeli_model");
            if ($pembeli_id != ""){
                $data['pembeli'] = $this->pembeli_model->getById($pembeli_id);
            }

            $data['periode1']   = $periode1;
            $data['periode2']   = $periode2;
            $data['saldoawal']  = $this->pembeli_model->getSaldoAwalPiutang($pembeli_id, $periode1);
            $data['piutangs']   = $this->pembeli_model->getDataPiutang($pembeli_id, $periode1, $periode2);

            $this->load->view("v_tagihan_pdf.php", $data);
        }

        $this->load->view("v_tagihan_per_periode.php");
    }

    public function index()
    {
        $this->load->view("v_tagihan.php");   
    }
}