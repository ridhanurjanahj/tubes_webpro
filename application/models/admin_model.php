<?php defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model

{

    // public function getId($username,$password)
    // {
    //     $this->db->where('username',$username);
    //     $this->db->where('password',$password);
    //     $data = $this->db->get('akun');
    //     return $data->result_array();
        
         //ini sama artinya seperti ini :
        // SELECT * FROM tokomatoa_ind
        // method ini akan mengembalikan sebuah array
        // yg berisi objek dari row
        //_table itu nama tabel
        // result() = untuk mengambil semua data dari query
    // }

    function cek_login($table,$where){		
        return $this->db->get_where($table,$where);
        
        if($cek > 0){
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
         
            $this->session->set_userdata($data_session);
            redirect(base_url("akun"));
        }else{
            echo "Username dan password salah !";
        }
    
    }	

   
    
   


}

