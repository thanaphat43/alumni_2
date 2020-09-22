<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function __construct(){
	 parent::__construct();
	 echo"my Construct"."</br>";

	}
	public function index()
	{
		
		$this->load->view('regis.php');
	}


public function show ($name=null,$lname=null){
	echo "Hello".$name."".$lname;
	$this->_display();
}
public function _display(){
	echo "</br>"."SE";
}
}
?>