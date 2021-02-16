<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Member_Model");
		$this->load->library("session");
 

	}
	public function index()
	{


		$this->load->view('signin');


	}
	public function summary()
	{

		$header['page_name'] = 'ภาพรวมการบริหาร';
		$header['page_focus'] = 'summary'; 
		$header['page_menu'] = 0;

		$this->load->view('template/header',$header);
		$this->load->view('home');
		$this->load->view('template/footer');

	
	}
	public function project()
	{
		

		$header['page_name'] = 'จัดการโครงการ';
		$header['page_focus'] = 'projectmanage'; 
		$header['page_menu'] = 1;

		$this->load->view('template/header',$header);
		$this->load->view('project');
		$this->load->view('template/footer');

	
	}
	public function search()
	{

		$header['page_name'] = 'สืบค้นข้อมูล';
		$header['page_focus'] = 'search'; 
		$header['page_menu'] = 2;

		$this->load->view('template/header',$header);
		#$this->load->view('home');
		$this->load->view('template/footer');

	
	}
	public function employee()
	{

		$header['page_name'] = 'จัดการข้อมูลพนักงาน';
		$header['page_focus'] = 'employee'; 
		$header['page_menu'] = 0;

		$this->load->view('template/header',$header);
		#$this->load->view('home');
		$this->load->view('template/footer');

	
	}

	

	public function base()
	{ 
		#$this->load->view('welcome_message');
		#echo $this->Member_Model->DB();
 		print_r($this->Member_Model->QueryMember());
 
	}


	public function getuserlogin($username,$password)
	{ 
		$member = $this->Member_Model->QueryMemberLogin($username,$password);
		$this->session->set_userdata(array("MemUsername"=>$member[0]->Username,
										   "MemPassword"=>$member[0]->Password, 
										   "MemPositionID" => $member[0]->PositionID));
           //
		 if ( $this->session->userdata("MemPositionID") != "" ) {
				 $a =  $this->session->userdata("MemPositionID"); 
				 $d =  $this->session->userdata("MemUsername"); 
				  redirect("home/summary/".$a.""); 
			  } else { 

			 }
	}








}
