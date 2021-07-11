<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends MY_Model
{
    public $transaksi_id;
    public $produk_id;
    public $tgl_transaksi;
    public $stockawal;
    public $stockakhir;
    public $laku;
    public $datang;
    public $baru;
    public $lama;
    public $total;
    public $hpp;
    public $hpj;
    public $totalmodal;
    public $modal;
    public $payon;
    public $laba;
    public $sisamodal;
    
    
    
    
    public function __construct()
    {
        parent::__construct();
        $this->_table ="transaksi";
        #$this->_field_nomor_transaksi = "no_pembayaran";
    }

    public function rules()
    {
        return [
            ['field' => 'produk_id',
            'label' => 'Produk',
            'rules' => 'required'],
            
            ['field' => 'tgl_transaksi',
            'label' => 'Tgl Transaksi',
            'rules' => 'required'],

            ['field' => 'datang',
            'label' => 'Datang',
            'rules' => 'numeric'],

            ['field' => 'baru',
            'label' => 'Baru',
            'rules' => 'numeric'],

            ['field' => 'lama',
            'label' => 'Lama',
            'rules' => 'numeric'],

            ['field' => 'stockawal',
            'label' => 'Stock Awal',
            'rules' => 'numeric'],

            ['field' => 'hpj',
            'label' => 'Harga Pokok Jual',
            'rules' => 'numeric'],

            ['field' => 'stockakhir',
            'label' => 'Stock Akhir',
            'rules' => 'numeric']
        ];
    }

    function data($number,$offset, $first_date, $second_date, $nama_produk_like = null){

        $this->db->where('DATE(tgl_transaksi) >=',$first_date); 
        $this->db->where('DATE(tgl_transaksi) <=',$second_date);

        
        if (!empty($nama_produk_like)) {
            $where_or = "(produk.nama like '%". $nama_produk_like. "%' or produk.kode like '%". $nama_produk_like. "%')";
            $this->db->where($where_or);
        }
        

        $this->db->order_by("produk.nama", "asc");
        $this->db->select($this->_table . ".*,produk.nama as nama_produk,produk.kode as kode_produk ");
        $this->db->join('produk', 'produk.produk_id = transaksi.produk_id');
		return $query = $this->db->get($this->_table,$number,$offset)->result();		
	}
 
	function jumlah_data($first_date, $second_date,$nama_produk_like = null ){
        
        $this->db->where('DATE(tgl_transaksi) >=',$first_date); 
        $this->db->where('DATE(tgl_transaksi) <=',$second_date);

        
        if (!empty($nama_produk_like)) {
            $where_or = "(nama like '%". $nama_produk_like. "%' or kode like '%". $nama_produk_like. "%')";
            $this->db->where($where_or);
        }
        

        $this->db->join('produk', 'produk.produk_id = transaksi.produk_id');
       
        #$this->output->enable_profiler(TRUE);
        #print_r($this->db->last_query());    

        return $this->db->get($this->_table)->num_rows();


    }
    
    function search_produk($nama){
        $this->db->like('nama', $nama , 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('produk')->result();
    }

    public function getById($id)
    {
        $this->db->select($this->_table . ".*,produk.kode as kode_produk,produk.nama as nama_produk");
        $this->db->join('produk', 'produk.produk_id = transaksi.produk_id');
        return $this->db->get_where($this->_table, ["transaksi_id" => $id])->row();
    }

   
    public function save(&$return_transaksi_id,&$pesan_error )
    {
        $post = $this->input->post();
        $id = $post["transaksi_id"];
        
		$this->produk_id 	    = $post["produk_id"];
        $this->tgl_transaksi 	= $post["tgl_transaksi"];

        $this->datang           = 0;
        $this->baru             = 0;
        $this->lama             = 0;
        $this->stockawal        = 0;
        $this->stockakhir       = 0;
        $this->hpj              = 0;
        
        if ($post["stockawal"]) {
            $this->stockawal       = $post["stockawal"];
        }

        if ($post["stockakhir"]) {
            $this->stockakhir      = $post["stockakhir"];
        }

        if ($post["datang"]) {
            $this->datang          = $post["datang"];
        }

        if ($post["baru"]) {
            $this->baru            = $post["baru"];
        }

        if ($post["lama"]) {
            $this->lama            = $post["lama"];
        }

        if ($post["hpj"]) {
            $this->hpj             = $post["hpj"];
        }

        $this->total = $this->stockawal + $this->datang;

        if ($this->total == 0){
            $this->hpp          = 0;
        } else {
            $this->hpp          = ((($this->stockawal * $this->lama) + ($this->datang * $this->baru)) / $this->total);
        }

        $salah = "";
        if ($this->produk_id == ""){
                    $salah = $salah . "<br>  - Produk Belum Diisi";
        }

        if ($this->stockawal > 0 && $this->lama <= 0){
            $salah = $salah . "<br>  - Harga Lama Belum Diisi";
        }

        if ($this->datang > 0 && $this->baru <= 0){
            $salah = $salah . "<br>  - Harga Baru Belum Diisi";
        }    

        if ($this->stockawal > $this->stockakhir && $this->hpj <= 0){
            $salah = $salah . "<br>  - Harga Jual Belum Diisi";
        }              
        

        if ($salah == ''){

            $this->laku             = $this->total - $this->stockakhir;
            $this->totalmodal       = $this->total * $this->hpp;
            $this->modal            = $this->laku * $this->hpp; 
            $this->payon            = $this->laku * $this->hpj;
            $this->laba             = $this->laku * ($this->hpj - $this->hpp);
            $this->sisamodal        = $this->hpp * $this->stockakhir;

            if ($id ==""){
                $this->transaksi_id = uniqid();
                $is_new = true;
    		} else {
                $is_new = false;
                $this->transaksi_id = $id;    
            }

            $return_transaksi_id = $this->transaksi_id;
        	
            if ($is_new == true) {
                log_message('Debug', "New Transaksi");
        	    return $this->db->insert($this->_table, $this);
        	} else {
                log_message('Debug', "Update Transaksi");
        		return $this->db->update($this->_table, $this, array('transaksi_id' => $id));
        	}
        } else {
            $pesan_error = $salah;
            return false;
        }
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("transaksi_id" => $id));
    }
    
}