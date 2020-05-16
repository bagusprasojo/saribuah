<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends MY_Model
{
    public $pembayaran_id;
    public $pembeli_id;
    public $no_pembayaran;
    public $tgl_transaksi;
    public $nominal;
    public $terbayarkan;
    public $keterangan;

    public function __construct()
    {
        parent::__construct();
        $this->_table ="pembayaran";
        $this->_field_nomor_transaksi = "no_pembayaran";
    }

    public function rules()
    {
        return [
            ['field' => 'no_pembayaran',
            'label' => 'No Transaksi',
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

    public function total_pembayaran_hari_ini(){
        $sql = "select  SUM(nominal) as nominal from pembayaran" . 
               " WHERE CAST(tgl_transaksi AS DATE) = CURDATE()";

        $query = $this->db->query($sql)->result();

        $jumlah = 0;
        foreach ($query as $row) {
            $jumlah = $row->nominal;
        }

        return $jumlah;
    }

    public function unsetteld_payment(){
        $sql = "select sum(nominal - IFNULL(terbayarkan, 0)) as nominal from pembayaran" .
               " where nominal > IFNULL(terbayarkan, 0)";
        
        $query = $this->db->query($sql)->result();

        $jumlah = 0;
        foreach ($query as $row) {
            $jumlah = $row->nominal;
        }

        return $jumlah;
    }

    public function pembayaran_per_periode($periode1, $periode2){
        $this->db->order_by("pembayaran.no_pembayaran", "asc");
        $this->db->select($this->_table . ".*,pembeli.nama as nama_pembeli");
        $this->db->where('pembayaran.tgl_transaksi >=', $periode1);
        $this->db->where('pembayaran.tgl_transaksi <=', $periode2);
        //$this->db->where("pembayaran.tgl_transaksi between $periode1 and $periode2");
        $this->db->join('pembeli', 'pembeli.pembeli_id = pembayaran.pembeli_id');
        
        return $query = $this->db->get($this->_table)->result();
    }

    function data($number,$offset, $first_date, $second_date, $no_pembayaranlike = null){
        #$this->db->where('DATE(tgl_transaksi) >=',$first_date); 
        #$this->db->where('DATE(tgl_transaksi) <=',$second_date);

        if (!empty($no_pembayaranlike)) {
			$this->db->like('no_pembayaran', $no_pembayaranlike);
		}
        
        $this->db->order_by("pembayaran.no_pembayaran", "desc");
        $this->db->select($this->_table . ".*,pembeli.nama as nama_pembeli");
        $this->db->join('pembeli', 'pembeli.pembeli_id = pembayaran.pembeli_id');
		return $query = $this->db->get($this->_table,$number,$offset)->result();		
	}
 
	function jumlah_data($first_date, $second_date,$no_pembayaranlike = null ){
        //$this->db->where('DATE(tgl_transaksi) >=',$first_date); 
        //$this->db->where('DATE(tgl_transaksi) <=',$second_date);

        if (!empty($no_pembayaranlike)) {
			$this->db->like('no_pembayaran', $no_pembayaranlike);
		}
        
        $this->db->join('pembeli', 'pembeli.pembeli_id = pembayaran.pembeli_id');
        return $this->db->get($this->_table)->num_rows();
    }
    
    function search_pembeli($nama){
        $this->db->like('nama', $nama , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('pembeli')->result();
    }

    public function getById($id)
    {
        $this->db->select($this->_table . ".*,pembeli.nama as nama_pembeli");
        $this->db->join('pembeli', 'pembeli.pembeli_id = pembayaran.pembeli_id');
        return $this->db->get_where($this->_table, ["pembayaran_id" => $id])->row();
    }

   
    public function save()
    {
        $post = $this->input->post();
        $id = $post["pembayaran_id"];
        
		$this->pembeli_id 	    = $post["pembeli_id"];
        $this->no_pembayaran 	= $post["no_pembayaran"];
        $this->tgl_transaksi 	= $post["tgl_transaksi"];
        $this->nominal          = $post["nominal"];
        $this->keterangan 	    = $post["keterangan"];
        
        if ($id ==""){
            $this->pembayaran_id = uniqid();
            $this->no_pembayaran = $this->GetNextNumber();
			$is_new = true;
		} else {
            $is_new = false;
            $this->pembayaran_id = $id;    
        }

        
        
         $pembayarans = "ID : " . $this->pembayaran_id . "<br>" .
                     "no_pembayaran : " . $this->no_pembayaran . "<br>" .
                     "pembeli_id : " . $this->pembeli_id . "<br>" .
                     "tgl_transaksi : " . $this->tgl_transaksi . "<br>" .
                     "nominal : " . $this->nominal . "<br>" .
                     "keterangan : " . $this->keterangan . "<br>" ;

         log_message('Debug', $pembayarans);

		if ($is_new == true) {
            log_message('Debug', "New Pembayaran");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update Pembayaran");
			return $this->db->update($this->_table, $this, array('pembayaran_id' => $id));
		}
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("pembayaran_id" => $id));
    }
    
}