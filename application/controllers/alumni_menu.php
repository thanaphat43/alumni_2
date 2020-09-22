<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumni_menu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('alumni_models','aa');
	}

	public function index()
	{
		$this->load->view('regis');
	}


	public function alumni_data(){
		$data = array(
			'img' => $this->input->post("img"),
			'fname' => $this->input->post("fname"),
			'cname' => $this->input->post("cname"),
			'lname'=> $this->input->post("lname"),
			'nname'=> $this->input->post("nname"),
			'cardid'=> $this->input->post("cardid"),
			'dates'=> $this->input->post("dates"),
			'years'=> $this->input->post("years"),
			'caddress'=> $this->input->post("caddress"),
		);
		
			$this->aa->alumni_insert($data);
			
		
	}
}
?>