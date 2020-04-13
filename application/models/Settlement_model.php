<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settlement_model extends MY_Model
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

    private function GetNomorBtnTerclick($post){
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

        return $snomor;
    }

    public function save(&$return_pembayaran_id)
    {
        $post   = $this->input->post();
        $snomor = $this->GetNomorBtnTerclick($post);

        $id = $post["settlement_id". $snomor];
        
		if ($id ==""){
            $this->settlement_id    = uniqid();
            $this->no_transaksi     = $this->GetNextNumber();
            $this->username         = $_SESSION['user_logged']->username;
			$is_new = true;
		} else {
            $is_new = false;
            $this->settlement_id    = $id;
            $this->no_transaksi     = $post["no_transaksi"];
            $this->username 	    = $post["username"];    
        }

        $this->piutang_id 	    = $post["piutang_id". $snomor];        
		$this->tgl_transaksi 	= $post["tgl_transaksi". $snomor];
        $this->pembayaran_id 	= $post["pembayaran_id". $snomor];
        $this->nominal          = $post["nominal". $snomor];
        $this->keterangan       = trim($post["keterangan". $snomor]);

        // echo $this->nominal;

        $this->db->trans_begin();
        if ($is_new == true) {
            log_message('Debug', "New Settlement");
			$this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update Settlement");
            $this->db->update($this->_table, $this, array('settlement_id' => $id));
        }

        // Update piutang terbayar
        $terbayar = $this->GetNominalPembayaranPiutang($this->piutang_id);
        $sql = "update piutang set terbayar =  " . $terbayar . 
               " where piutang_id = '". $this->piutang_id . "'";

        $this->db->query($sql);

        // Update pembayaran terbayarkan
        $terbayarkan = $this->GetNominalTerbayarkan($this->pembayaran_id);
        $sql = "update pembayaran set terbayarkan = " . $terbayarkan . 
               " where pembayaran_id = '". $this->pembayaran_id . "'";

        $this->db->query($sql);

        

        if ($this->db->trans_status() === FALSE)
        {
        $this->db->trans_rollback();
        }
        else
        {
            $this->db->trans_commit();
            $return_pembayaran_id = $this->pembayaran_id; 
            return true;
        }
    }

    public function GetNominalPembayaranPiutang($piutang_id){
        $sql = "select SUM(nominal) as xxx from settlement where piutang_id = ?";       

        $querys = $this->db->query($sql, [$piutang_id])->result();
        foreach ($querys as $query):
            $nominal = $query->xxx;
        endforeach;

        if ($nominal == null){
            $nominal = 0;
        }

        return $nominal;
    }

    public function GetNominalTerbayarkan($pembayaran_id){
        $sql =  "select SUM(nominal) as xxx " .
                " from settlement " .
                " where pembayaran_id = ?";

        $querys = $this->db->query($sql, [$pembayaran_id])->result();
        foreach ($querys as $query):
            $nominal = $query->xxx;
        endforeach;
        
        if ($nominal == null){
            $nominal = 0;
        }

        return $nominal;
    }

    public function delete($id)
    {
        $settlement = $this->getById($id);

        $this->db->trans_begin();        
        $this->db->delete($this->_table, array("settlement_id" => $id));
        // Update piutang terbayar
        $terbayar = $this->GetNominalPembayaranPiutang($settlement->piutang_id);
        $sql = "update piutang set terbayar =  " . $terbayar . 
               " where piutang_id = '". $settlement->piutang_id . "'";

        $this->db->query($sql);

        // Update pembayaran terbayarkan
        $terbayarkan = $this->GetNominalTerbayarkan($settlement->pembayaran_id);
        $sql = "update pembayaran set terbayarkan = " . $settlement->terbayarkan . 
               " where pembayaran_id = '". $settlement->pembayaran_id . "'";

        $this->db->query($sql);

        if ($this->db->trans_status() === FALSE)
        {
        $this->db->trans_rollback();
        }
        else
        {
        $this->db->trans_commit();
        }
    }    
}