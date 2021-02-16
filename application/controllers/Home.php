<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Member_Model");
		$this->load->library("session");
		if ( $this->session->userdata("PositionID") == "" ) {
			//    $this->load->view("template/header");
				redirect("home/index");
				$this->session->sess_destroy();
		   }

	}
	public function index()
	{


		$this->load->view('signin');


	}
	public function summary($ID)
	{
        $data["PositionID"] = $this->session->userdata("PositionID"); 
		$header['page_name'] = 'ภาพรวมการบริหาร';
		$header['page_focus'] = 'summary'; 
		$header['page_menu'] = 0;
        $username = $data["PositionID"]; 
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


	public function login($username=null,$password=null)
	{  
                if ( !isset($_POST["username"])) {
					echo "Paramiter Invalid";
				   exit();
				   }
 
				 $username           =   trim($_POST["username"]) ;
				 $password           =   trim($_POST["password"]) ;
				 $member = $this->Member_Model->QueryMemberLogin($username,$password); 
		 
		        
				  $arrayReturna = array();
 
				  foreach ($member as $ResultValue) { 
				   $MemUsername =  trim(iconv("tis-620", "utf-8", $ResultValue->Username ));
				   $MemPassword =  trim(iconv("tis-620", "utf-8", $ResultValue->Password ));
				   $MemPositionID =  trim(iconv("tis-620", "utf-8", $ResultValue->PositionID )); 
				   $arrayReturna["Username"][] = $MemUsername;
				   $arrayReturna["Password"][] = $MemPassword;
				   $arrayReturna["PositionID"][] = $MemPositionID;  
				  } 
 
				 echo json_encode($arrayReturna);
	}








}
