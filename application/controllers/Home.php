<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	function __construct()
	{

		parent::__construct();
		$this->load->model("Member_Model");
		$this->load->model("Project_Model"); 

		$this->load->library("session"); 

		$sess = $this->session->userdata();

	   	


	}
	public function index()
	{


		$this->load->view('signin');


	}
	public function summary()
	{	
		$sess = $this->session->userdata();
		if (!isset($sess["ID"])) {
			$this->session->sess_destroy();
			redirect("Home/index");
		} 
		#echo $sess["ID"];
		#echo $sess["Username"];
		#echo $sess["PositionID"];
		#echo $sess["Name"];
 		#print_r($sess);

		$header['page_name'] = 'ภาพรวมการบริหารโครงการ';
		$header['page_focus'] = 'summary'; 
		$header['page_menu'] = 0; 
		$header['Name'] = $sess["Name"];

		$this->load->view('template/header',$header);
		$this->load->view('home');
		$this->load->view('template/footer');
		
		
	}
	public function project()
	{
		$sess = $this->session->userdata();
		if (!isset($sess["ID"])) {
			$this->session->sess_destroy();
			redirect("Home/index");
		} 
		$header['page_name'] = 'จัดการโครงการ';
		$header['page_focus'] = 'projectmanage'; 
		$header['page_menu'] = 1;
		$header['Name'] = $sess["Name"];

		$data["PositionID"] = $sess["PositionID"];
		$data["MemberID"] = $sess["ID"];
		$data["MemberName"] = $sess["Name"];
		$data["SignMember"] = $this->Member_Model->QueryMemberNotIn($sess["ID"]);

		$this->load->view('template/header',$header);
		$this->load->view('project',$data);
		$this->load->view('template/footer');


	
	}
	public function projectinfo($ProjectID)
	{

		if (!isset($ProjectID)) {
			redirect("Home/project");
			exit();
		}

		$sess = $this->session->userdata();
		if (!isset($sess["ID"])) {
			$this->session->sess_destroy();
			redirect("Home/index");
		} 

		$header['page_name'] = 'ข้อมูลโครงการ';
		$header['page_focus'] = 'projectmanage'; 
		$header['page_menu'] = 1;
		$header['Name'] = $sess["Name"];


		
		$data["ProjectINFO"] =  $this->Project_Model->GetDataProjectsInfo($ProjectID);
		$data["GroupSign"] = $this->Project_Model->GetDataSignEmpInGroup($ProjectID);


		$this->load->view('template/header',$header);
		$this->load->view('projectdetail',$data);
		$this->load->view('template/footer');



	} 
	public function search()
	{
		$sess = $this->session->userdata();
		if (!isset($sess["ID"])) {
			$this->session->sess_destroy();
			redirect("Home/index");
		} 
		$header['page_name'] = 'สืบค้นข้อมูล';
		$header['page_focus'] = 'search'; 
		$header['page_menu'] = 2;
		$header['Name'] = $sess["Name"];

		$data["ProjectINFO"] = $this->Project_Model->GetDataProjectSearch();

		$this->load->view('template/header',$header);
		$this->load->view('search',$data);
		$this->load->view('template/footer');

	
	}
	public function employee()
	{	
		$sess = $this->session->userdata();
		if (!isset($sess["ID"])) {
			$this->session->sess_destroy();
			redirect("Home/index");
		} 
		$header['page_name'] = 'ผู้ใช้งาน';
		$header['page_focus'] = 'employee'; 
		$header['page_menu'] = 0;
		$header['Name'] = $sess["Name"];

		$data["PositionID"] = $sess["PositionID"];

		$data["ProjectINFO"] = $this->Project_Model->GetDataProjectSearch();

		$data["MemberINFO"] = $this->Member_Model->GetDataMember();


		$this->load->view('template/header',$header);
		$this->load->view('member',$data);
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
 					
				   $is_success = 0;

				 $username           =   trim($_POST["username"]) ;
				 $password           =   trim($_POST["password"]) ;
				 $member = $this->Member_Model->QueryMemberLogin($username,$password);

				  $arrayReturna = array();
 
				  foreach ($member as $ResultValue) { 

				   $MemID =  trim(iconv("tis-620", "utf-8", $ResultValue->ID ));
				   $MemUsername =  trim(iconv("tis-620", "utf-8", $ResultValue->Username ));
				   $MemName =  $ResultValue->Name;
				   $MemPositionID =  trim(iconv("tis-620", "utf-8", $ResultValue->PositionID )); 

				   $arrayReturna["ID"] = $MemID;
				   $arrayReturna["Username"] = $MemUsername;
				   $arrayReturna["Name"] = $MemName;
				   $arrayReturna["PositionID"] = $MemPositionID; 

				   $is_success = 1;
				  } 

				  $this->session->set_userdata($arrayReturna);

				  echo $is_success;
	}
	public function logout()
	{  
                 

			$this->session->sess_destroy();
			redirect("Home/index");


	}








}
