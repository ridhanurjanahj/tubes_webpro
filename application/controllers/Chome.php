<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chome extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('product_model');
		$this->load->model('tokoid_model');
		
		
		
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		
		$this->load->view('home');
		
	}

	// public function login()
	// {
	// 	if ($this->admin_model->getId($this->input->post('name'),$this->input->post('password'))>0) {
	// 		$this->load->view('admin/overview');
	// 		$this->session->set_flashdata('masuk',1);
	// 	}
	// 	else{
	// 		redirect('Chome');
	// 	}
	// }

	function login(){
		$username = $this->input->post('name');			// dari form
		$password = $this->input->post('password');		// dari form
		$where = array(
			'username' => $username,					// dari databases
			'password' => $password						// dari databases
			);
		$cek = $this->admin_model->cek_login("akun",$where)->num_rows();

		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Chome');
	}

	
	
	public function vtokomatoa()
	{
		// fungsi load viewe about.php
		$data["tokomatoa_ind"] = $this->tokoid_model->getAll();
		$this->load->view('vtokomatoa',$data); 
	}

	public function contact()
	{
		// fungsi load viewe about.php

		$this->load->view('contact'); 
	}

	public function vproduk()
	{	// fungsi load viewe telyu.php
		$data["products"] = $this->product_model->getAll();
		$this->load->view('vproduk',$data);
	}

	public function vwhatts()
	{	// fungsi load viewe telyu.php
		
		$this->load->view('vwhatts');
	}

	public function vliputan()
	{	// fungsi load viewe telyu.php
		
		$this->load->view('vliputan');
	}

	

}


			