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
                
        
            
    }
	public function index()
	{
		if($this->user_model->isNotLogin()) {
			$data['show_dashboard'] = 0;
		} else {
			$data['show_dashboard'] = 1;
		}

		$data['total_piutang'] 			= 1000000;
		$data['jumlah_pembeli'] 		= 235;
		$data['pembayaran_hari_ini'] 	= 3450000;
		$data['unsettled_payment'] 		= 1230000;
		$this->load->view('welcome_message', $data);
	}
}
