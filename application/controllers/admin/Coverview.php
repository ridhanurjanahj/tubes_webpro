<?php

class Coverview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		// if ($this->session->has_userdata('masuk') != 1) {
		// 	$this->load->view("home");
		// }
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}

	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}

	
	
}

?>