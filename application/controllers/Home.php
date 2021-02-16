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
		#$this->load->view('home');
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







}
