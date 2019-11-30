<?php defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model
{
    private $_table = "products";

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $product_id;
    public $name;
    public $price;
    public $image = "default.jpg";
    public $description;

    public function rules()
    {
        return [
        ['field' => 'name',
        'label' => 'Name',
        'rules' => 'required'],

        ['field' => 'price',
        'label' => 'Price',
        'rules' => 'numeric'],
        
        ['field' => 'description',
        'label' => 'Description',
        'rules' => 'required'] 
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
         //ini sama artinya seperti ini :
        // SELECT * FROM products
        // method ini akan mengembalikan sebuah array
        // yg berisi objek dari row
        //_table itu nama tabel
        // result() = untuk mengambil semua data dari query
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table,["product_id" => $id])->row();
        //ini sama artinya seperti ini :
        //SELECT * FROM product WHERE product_id=$id
        //method ini akan mengembalikan sebuiah objek
        // "=>" sama dengan where
        // "row()" sama fungsi ambil satu data dari quert
    }

    public function save()
    {
        $post = $this->input->post();   //ambil data dari form
        $this->product_id = uniqid();   // membuat id unik
        $this->name = $post["name"];    // isi field name
        $this->price = $post["price"];  // isi field price
        $this->image = $this->_uploadImage(); // isi image yg di panggil dari class ini sendiri
        $this->description = $post["description"];  // isi field descroption
        $this->db->insert($this->_table, $this); // simpan ke databases

    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name = $post["name"];
        $this->price = $post["price"];

            if (!empty($_FILES["image"]["name"])) {
                $this->image = $this->_uploadImage();
            } else {
                $this->image = $post["old_image"];
            }

        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    //METHOD DELETE
    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("product_id" => $id));
    }


    #Method upload image
    private function _uploadImage()
    {
    $config['upload_path']          = './upload/product/'; //untuk menentukan alamat lokasi file akan terupload
    $config['allowed_types']        = 'gif|jpg|png';        //untuk membatasi tipe file yang boleh di-upload.
    $config['file_name']            = $this->product_id;    //untuk menentukan nama file. Oya, nama file akan kita ambil dari ID produk. Karena itu, kita mengisinya dengan $this->product_id.
    $config['overwrite']			= true;                 //untuk menindih file yang sudah ter-upload saat di-upload file baru (edit data).
    $config['max_size']             = 1024; // 1MB          //untuk menentukan batasan ukuran file.
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    // yg diatas ini untuk lebar tinggi image

    $this->load->library('upload', $config);    // me-load library upload dengan konfigurasi yang sudah ditentukan.

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    //print_r($this->upload->display_errors());
    return "default.jpg";               // mengembalikan nama file yang sudah di-upload. Apabila upload gagal, maka kembalikan saja default.jpg.
    }

    #METHOD DELETE IMAGE UPLOAD
    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }

}