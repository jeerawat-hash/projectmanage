<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Member_Model");


	}

	public function index()
	{


		 


	}
	public function base()
	{


		#$this->load->view('welcome_message');
		#echo $this->Member_Model->DB();
 		print_r($this->Member_Model->QueryMember());


	}







}
