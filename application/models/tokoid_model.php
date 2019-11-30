<?php defined('BASEPATH') OR exit('No direct script access allowed');

class tokoid_model extends CI_Model
{
    private $_table = "tokomatoa_ind";

    // nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $id_toko;
    public $kota_toko;
    public $nama_toko;
    public $alamat_toko;
    public $gambar_toko = "default.jpg";
    public $telp_toko;

    public function rules()
    {
        return [
        ['field' => 'kota_toko',
        'label' => 'Kota',
        'rules' => 'required'],

        ['field' => 'nama_toko',
        'label' => 'Nama',
        'rules' => 'required'],
        
        ['field' => 'alamat_toko',
        'label' => 'Alamat',
        'rules' => 'required'],

        ['field' => 'telp_toko',
        'label' => 'Telp',
        'rules' => 'numeric']
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
        return $this->db->get_where($this->_table,["id_toko" => $id])->row();
        //ini sama artinya seperti ini :
        //SELECT * FROM product WHERE id_toko=$id
        //method ini akan mengembalikan sebuiah objek
        // "=>" sama dengan where
        // "row()" sama fungsi ambil satu data dari quert
    }

    public function save()
    {
        $post = $this->input->post();   //ambil data dari form
        $this->id_toko = uniqid();   // membuat id unik
        $this->kota_toko = $post["kota_toko"];
        $this->nama_toko = $post["nama_toko"];
        $this->alamat_toko = $post["alamat_toko"];  // isi field price
        $this->gambar_toko = $this->_uploadImage(); // isi image yg di panggil dari class ini sendiri
        $this->telp_toko = $post["telp_toko"];  // isi field descroption
        $this->db->insert($this->_table, $this); // simpan ke databases

    }

    
    public function update()
    {        
        $post = $this->input->post();
        $this->id_toko = $post["id"];
        $this->kota_toko = $post["kota_toko"];
        $this->nama_toko = $post["nama_toko"];
        $this->alamat_toko = $post["alamat_toko"];
    
            if (!empty($_FILES["gambar_toko"]["name"])) {
                $this->gambar_toko = $this->_uploadImage();
            } else {
                $this->gambar_toko = $post["old_image"];
            }

        $this->telp_toko = $post["telp_toko"];
        $this->db->update($this->_table, $this, array('id_toko' => $post['id']));
    }

    //METHOD DELETE
    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_toko" => $id));
    }


    #Method upload image
    private function _uploadImage()
    {
    $config['upload_path']          = './upload/tokomatoa_ind/'; //untuk menentukan alamat lokasi file akan terupload
    $config['allowed_types']        = 'gif|jpg|png';        //untuk membatasi tipe file yang boleh di-upload.
    $config['file_name']            = $this->id_toko;    //untuk menentukan nama file. Oya, nama file akan kita ambil dari ID produk. Karena itu, kita mengisinya dengan $this->product_id.
    $config['overwrite']			= true;                 //untuk menindih file yang sudah ter-upload saat di-upload file baru (edit data).
    $config['max_size']             = 1024; // 1MB          //untuk menentukan batasan ukuran file.
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    // yg diatas ini untuk lebar tinggi image

    $this->load->library('upload', $config);    // me-load library upload dengan konfigurasi yang sudah ditentukan.

    if ($this->upload->do_upload('gambar_toko')) {
        return $this->upload->data("file_name");
    }
    print_r($this->upload->display_errors());
    return "default.jpg";               // mengembalikan nama file yang sudah di-upload. Apabila upload gagal, maka kembalikan saja default.jpg.
    }

    #METHOD DELETE IMAGE UPLOAD
    private function _deleteImage($id)
    {
        $product = $this->getById($id);
        if ($product->gambar_toko != "default.jpg") {
            $filename = explode(".", $product->gambar_toko)[0];
            return array_map('unlink', glob(FCPATH."upload/tokomatoa_ind/$filename.*"));
        }
    }

}