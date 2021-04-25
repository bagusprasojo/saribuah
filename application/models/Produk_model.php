<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public $produk_id;
    public $kode;
    public $nama;
    
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'kode',
            'label' => 'Kode',
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
        
        $this->db->select("produk.produk_id, kode,nama");
        $this->db->order_by("nama", "asc");
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
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $id = $post["produk_id"];
        
		if ($id ==""){
			$this->produk_id = uniqid();
			$is_new = true;
		} else {
            $is_new = false;
            $this->produk_id = $id;    
        }

		$this->nama 	= $post["nama"];
		$this->kode 	= $post["kode"];
        
        

		if ($is_new == true) {
            log_message('Debug', "New Produk");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update Produk");
			return $this->db->update($this->_table, $this, array('produk_id' => $id));
		}
    }
    
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("produk_id" => $id));
    }
    
}