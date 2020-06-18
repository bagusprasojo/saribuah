<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {
        parent::__construct();
		$this->load->model("user_model");
		// Inisialisasi usermodel
                
        
            
    }
	public function index()
	{
		if($this->user_model->isNotLogin()) {
			$data['show_dashboard'] 		= 0;
			$data['total_piutang'] 			= 0;
			$data['jumlah_pembeli'] 		= 0;
			$data['pembayaran_hari_ini'] 	= 0;
			$data['unsettled_payment'] 		= 0;
			
		} else {	
			$this->load->model("piutang_model");
			$this->load->model("pembeli_model");
			$this->load->model("pembayaran_model");

			$data['show_dashboard'] 		= 1;
			$data['total_piutang'] 			= $this->piutang_model->get_total_piutang_belum_lunas();
			$data['jumlah_pembeli'] 		= $this->pembeli_model->jumlah_data();
			$data['pembayaran_hari_ini'] 	= $this->pembayaran_model->total_pembayaran_hari_ini();
			$data['unsettled_payment'] 		= $this->pembayaran_model->unsetteld_payment();
			
		}

		$this->load->view('welcome_message', $data);
	}
}
