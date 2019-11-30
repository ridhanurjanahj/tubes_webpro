<?php defined('BASEPATH') OR exit('No direct script access allowed');

class newsletter_model extends CI_Model
{
    private $_table = "newsletter";

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_newsletter;
    public $name_newsletter;
 

    public function rules()
    {
        return [
        ['field' => 'name_newsletter',
        'label' => 'Name',
        'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
         //ini sama artinya seperti ini :
        // SELECT * FROM tkomatoa_ind
        // method ini akan mengembalikan sebuah array
        // yg berisi objek dari row
        //_table itu nama tabel
        // result() = untuk mengambil semua data dari query
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,["id_newsletter" => $id])->row();
        //ini sama artinya seperti ini :
        //SELECT * FROM product WHERE id_toko=$id
        //method ini akan mengembalikan sebuiah objek
        // "=>" sama dengan where
        // "row()" sama fungsi ambil satu data dari quert
    }

    public function save()
    {
        $post = $this->input->post();   //ambil data dari form
        $this->id_newsletter = uniqid();   // membuat id unik
        $this->name_newsletter = $post["name_newsletter"];
   
        $this->db->insert($this->_table, $this); // simpan ke databases

    }
    
    public function update()
    {        
        $post = $this->input->post();
        $this->id_newsletter = $post["id"];
        $this->name_newsletter = $post["name_newsletter"];
        $this->db->update($this->_table, $this, array('id_newsletter' => $post['id']));
    }

    //METHOD DELETE
    public function delete($id)
    {
       
        return $this->db->delete($this->_table, array("id_newsletter" => $id));
    }


}