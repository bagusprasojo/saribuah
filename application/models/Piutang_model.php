<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Piutang_model extends MY_Model
{
    public $piutang_id;
    public $pembeli_id;
    public $no_transaksi;
    public $tgl_transaksi;
    public $keterangan;
    public $tgl_jatuh_tempo;
    public $nominal;
    public $terbayar;
    public $username;

    public function __construct()
    {
        parent::__construct();
        $this->_table ="piutang";
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

    public function piutang_belum_lunas($pembeli_id){
        $this->db->order_by("no_transaksi", "asc");
        $this->db->join('pembeli', 'pembeli.pembeli_id = piutang.pembeli_id');
        $this->db->where("nominal > terbayar");
        $this->db->where("piutang.pembeli_id = '" . $pembeli_id . "'");
		return $query = $this->db->get($this->_table)->result();		
	
    }

    public function getListTotalPiutang(){
        $sql =  "select b.nama  , b.alamat, sum(a.nominal - a.terbayar) as piutang " .
                " from piutang a " .
                " INNER JOIN pembeli b on a.pembeli_id = b.pembeli_id " .
                " where nominal > terbayar " .
                " GROUP BY b.nama, b.alamat " .
                " ORDER BY b.nama";

        $query = $this->db->query($sql)->result();
        return $query;
        
    }

    public function get_total_piutang_belum_lunas(){
        $sql = "select sum(nominal - terbayar) as nominal from piutang where nominal > terbayar";
        $query = $this->db->query($sql)->result();
        
        $sisa = 0;
        foreach ($query as $row) {
            $sisa = $row->nominal;
        }

        return $sisa;
        
    }

    function data($number,$offset, $first_date, $second_date, $no_transaksilike = null){
        #$this->db->where('DATE(tgl_transaksi) >=',$first_date); 
        #$this->db->where('DATE(tgl_transaksi) <=',$second_date);

        if (!empty($no_transaksilike)) {
			$this->db->like('no_transaksi', $no_transaksilike);
		}
        
        $this->db->order_by("no_transaksi", "desc");
        $this->db->join('pembeli', 'pembeli.pembeli_id = piutang.pembeli_id');
		return $query = $this->db->get($this->_table,$number,$offset)->result();		
	}
 
	function jumlah_data($first_date, $second_date,$no_transaksilike = null ){  
        if (!empty($no_transaksilike)) {
			$this->db->like('no_transaksi', $no_transaksilike);
		}
        
        $this->db->join('pembeli', 'pembeli.pembeli_id = piutang.pembeli_id');
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
        $this->db->join('pembeli', 'pembeli.pembeli_id = piutang.pembeli_id');
        return $this->db->get_where($this->_table, ["piutang_id" => $id])->row();
    }

   
    public function save()
    {
        $post = $this->input->post();
        $id = $post["piutang_id"];
        
		if ($id ==""){
            $this->piutang_id = uniqid();
            $this->no_transaksi = $this->GetNextNumber();
            $this->username = $_SESSION['user_logged']->username;
			$is_new = true;
		} else {
            $is_new = false;
            $this->piutang_id   = $id;
            $this->no_transaksi = $post["no_transaksi"];
            $this->username 	= $post["username"];    
        }

		$this->pembeli_id 	    = $post["pembeli_id"];
		$this->tgl_transaksi 	= $post["tgl_transaksi"];
        $this->tgl_jatuh_tempo 	= $post["tgl_transaksi"];
        $this->nominal          = $post["nominal"];
        $this->keterangan       = trim($post["keterangan"]);
        $this->terbayar         = 0;
        
         $piutangs = "ID : " . $this->piutang_id . "<br>" .
                     "no_transaksi : " . $this->no_transaksi . "<br>" .
                     "pembeli_id : " . $this->pembeli_id . "<br>" .
                     "tgl_transaksi : " . $this->tgl_transaksi . "<br>" .
                     "tgl_jatuh_tempo : " . $this->tgl_jatuh_tempo . "<br>" .
                     "keterangan :" . $this->keterangan . "<br>".
                     "nominal : " . $this->nominal . "<br>" .
                     "terbayar : " . $this->terbayar . "<br>" ;

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
        return $this->db->delete($this->_table, array("piutang_id" => $id));
    }    
}