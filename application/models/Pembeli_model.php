<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model
{
    private $_table = "pembeli";

    public $pembeli_id;
    public $nama;
    public $alamat;
    public $telp;
    public $kelompok;
    public $email;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'kelompok',
            'label' => 'Kelompok',
            'rules' => 'required'],
            
            ['field' => 'telp',
            'label' => 'Telp',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        
        $this->db->order_by("nama", "asc");
        return $this->db->get($this->_table)->result();
    }
    
    function data($number,$offset, $namalike = null){
        if (!empty($namalike)) {
			$this->db->like('nama', $namalike);
        }
        
        $this->db->select("pembeli.pembeli_id, nama, kelompok, alamat, telp, email,sum(nominal - terbayar) as sisa_piutang");
        $this->db->order_by("nama", "asc");
        $this->db->join('piutang', 'pembeli.pembeli_id = piutang.pembeli_id and piutang.nominal > piutang.terbayar', 'left');
        $this->db->group_by(array("pembeli.pembeli_id", "nama", "kelompok", "alamat", "telp", "email"));
		return $query = $this->db->get($this->_table, $number,$offset)->result();		
	}
 
	function jumlah_data($namalike = null){
        if (!empty($namalike)) {
			$this->db->like('nama', $namalike);
		}
        return $this->db->get($this->_table)->num_rows();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["pembeli_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $id = $post["pembeli_id"];
        
		if ($id ==""){
			$this->pembeli_id = uniqid();
			$is_new = true;
		} else {
            $is_new = false;
            $this->pembeli_id = $id;    
        }

		$this->nama 	= $post["nama"];
		$this->alamat 	= $post["alamat"];
        $this->telp 	= $post["telp"];
        $this->kelompok = $post["kelompok"];
        $this->email    = $post["email"];
        
        $pembelis = "ID : " . $this->pembeli_id . "<br>" .
                    "Nama : " . $this->nama . "<br>" .
                    "Alamat : " . $this->alamat . "<br>" .
                    "Kelompok : " . $this->kelompok . "<br>" .
                    "Email : " . $this->email . "<br>" .
                    "Telp : " . $this->telp . "<br>";

        log_message('Debug', $pembelis);

		if ($is_new == true) {
            log_message('Debug', "New Pembeli");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update Pembeli");
			return $this->db->update($this->_table, $this, array('pembeli_id' => $id));
		}
    }

    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("pembeli_id" => $id));
    }
    
}