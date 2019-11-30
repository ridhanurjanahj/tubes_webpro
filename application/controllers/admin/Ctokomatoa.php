<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ctokomatoa extends CI_Controller
{
    public function __construct() //Method __construct() merupakan sebuah konstruktor. Method ini yang akan dieksekusi pertama kali saat    Controller diakses.
    {
        parent::__construct();
        $this->load->model("tokoid_model"); //Pada method ini, kita melakukan load model (porduct_model) dan library (form_validation).
        $this->load->library('form_validation'); //Library form_validation akan kita gunakan untuk memvalidasi input pada method add() dan edit().
    }

    public function index() //Pada method ini, kita akan mengambil data dari model dengan memanggil method product_model->getAll()
    {
        $data["tokomatoa_ind"] = $this->tokoid_model->getAll(); //Pada method ini, kita akan mengambil data dari model dengan memanggil method product_model->getAll().
        $this->load->view("admin/tokomatoa/list", $data); //Lalu kita me-rendernya ke dalam view admin/product/list.
    }


    //METHOD ADD()
    //Method ini bertugas untuk menampilkan form add dan menyimpan data ke database. Tentunya dengan memanggil method save() yang ada pada model.
    //Namun, sebelum memanggil method save(), kita lakukan validasi terlebih dahulu dengan mengeksekusi method run() pada objek $validation.
    
    public function add()
    {
        $product = $this->tokoid_model;    //objek model
        $validation = $this->form_validation; // objek form valitadion
        $validation->set_rules($product->rules()); // terapkan rules

        if ($validation->run()) {       // melakukan validasi
            $product->save();           // simpan data ke databes
            $this->session->set_flashdata('success', 'Berhasil disimpan'); // tampilkan berhasil
        }

        $this->load->view("admin/tokomatoa/new_form"); // tamilkan form add
    }


    //METHOD EDIT()
    //  method edit() juga bertugas untuk menampilkan form dan menyimpan data.

    // public function edit($id = null)
         //$id = id data yg akan di edit
        // diberikan nilai null agar mudah di cek

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ctokomatoa'); // redirect ke route ini kalau $id bernilai null / redirect juga tidak ada $id
       
        $product = $this->tokoid_model;             // objek model
        $validation = $this->form_validation;        // objek validation
        $validation->set_rules($product->rules());   // menerapkan rules

        if ($validation->run()) {                   // melakukan validasi
            $product->update();                     // menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tokomatoa"] = $product->getById($id);      // mngembil data untuk di tampilkan pada form
        if (!$data["tokomatoa"]) show_404();              //if  tidak ada data, tampilan error 404

        $this->load->view("admin/tokomatoa/edit_form", $data);    //menampilkan form edit
    }

    // METHOD DELETE()
    //befungsi untuk menangni penghapusan data.

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->tokoid_model->delete($id)) {
            redirect(site_url('admin/ctokomatoa')); //Apabila data berhasil dihapus, maka kita langsung alihkan (redirect()) menuju ke halaman admin/products/.
        }
    }
}