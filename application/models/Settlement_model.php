<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Piutang_model extends MY_Model
{
    public $settlement_id;
    public $piutang_id;
    public $pembayaran_id;
    public $tgl_transaksi;
    public $no_transaksi;
    public $keterangan;
    public $nominal;
    public $username;

    public function __construct()
    {
        parent::__construct();
        $this->_table ="settlement";
    }

    public function rules()
    {
        return [
            ['field' => 'no_transaksi',
            'label' => 'No Transaksi',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],

            ['field' => 'pembeli_id',
            'label' => 'Pembeli',
            'rules' => 'required'],
            
            ['field' => 'tgl_transaksi',
            'label' => 'Tgl Transaksi',
            'rules' => 'required'],

            ['field' => 'nominal',
            'label' => 'Nominal',
            'rules' => 'numeric']
        ];
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["settlement_id" => $id])->row();
    }

   
    public function save()
    {
        $post = $this->input->post();
        $id = $post["piutang_id"];

        $post = $this->input->post();
                
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

        $snomor = "";

        $id = $post["settlement_id"];

		if ($id ==""){
            $this->settlement_id    = uniqid();
            $this->no_transaksi     = $this->GetNextNumber();
            $this->username         = $_SESSION['user_logged']->username;
			$is_new = true;
		} else {
            $is_new = false;
            $this->piutang_id   = $id;
            $this->no_transaksi = $post["no_transaksi"];
            $this->username 	= $post["username"];    
        }

        $this->piutang_id 	    = $post["piutang_id"];
        
		$this->tgl_transaksi 	= $post["tgl_transaksi"];
        $this->tgl_jatuh_tempo 	= $post["tgl_transaksi"];
        $this->nominal          = $post["nominal"];
        $this->keterangan       = trim($post["keterangan"]);
        $this->terbayar         = 0;
        
         

         log_message('Debug', $piutangs);

		if ($is_new == true) {
            log_message('Debug', "New Piutang");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update Piutang");
			return $this->db->update($this->_table, $this, array('piutang_id' => $id));
		}
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("settlement_id" => $id));
    }    
}