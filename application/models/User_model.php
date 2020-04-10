<?php

class User_model extends CI_Model
{
    private $_table = "user";

    public $user_id;
    public $username;
    public $nama;
    public $password;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'User Name',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'konfirmasipassword',
            'label' => 'Konfirmasi Password',
            'rules' => 'required'],

            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required']
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $id = $post["user_id"];
        
		if ($id ==""){
			$this->user_id = uniqid();
			$is_new = true;
		} else {
            $is_new = false;
            $this->user_id = $id;    
        }
        
        $this->username = $post["username"];
        $this->nama    = $post["nama"];
        $this->password =  password_hash($post["password"], PASSWORD_DEFAULT);
        
        if ($is_new == true) {
            log_message('Debug', "New User");
			return $this->db->insert($this->_table, $this);
		} else {
            log_message('Debug', "Update User");
			return $this->db->update($this->_table, $this, array('user_id' => $id));
		}
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    function data($number,$offset){
        $this->db->order_by("nama", "asc");
        return $query = $this->db->get($this->_table,$number,$offset)->result();		
    }
    
    function jumlah_data(){  
        return $this->db->get($this->_table)->num_rows();
    }
    public function dologin(){
		$post = $this->input->post();

        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if($user){
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            $isAdmin = $user->role == "admin";

            // jika password benar dan dia admin
            if($isPasswordTrue){ 
                // login sukses yay!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
        }
        
        // login gagal
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id='{$user_id}'";
        $this->db->query($sql);
    }

    public function getUserInfoBynameOrUserID($AFilter){  
        
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('username >', $AFilter); 
        $q = $this->db->get();

        if($this->db->affected_rows() > 0){  
          $row = $q->row();  
          return $row;  
        }  
    }  

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function insertToken($user_id){    
        $token = substr(sha1(rand()), 0, 30);   
        $date = date('Y-m-d');  
        
        $string = array(  
            'token'=> $token,  
            'user_id'=>$user_id,  
            'created'=>$date  
        );  
        $query = $this->db->insert_string('tokens',$string);  
        $this->db->query($query);
          
        return $token . $user_id;  
       
   }  

   public function delete($id)
   {
        return $this->db->delete($this->_table, array("user_id" => $id));
   }

   public function getUserLogin(){
       if (!$this->isNotLogin){
        return $this->session->userdata('user_logged');    
       }
   }


}