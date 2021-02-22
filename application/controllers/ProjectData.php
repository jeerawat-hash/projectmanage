<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectData extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Project_Model"); 
		$this->load->library("session"); 

	}
	public function index()
	{

 
	}

	public function DelProject()
	{
		$sess = $this->session->userdata();
		#$ProjectID = $_POST["ProjectID"];
		#$Comment = $_POST["Comment"]; 
		print_r($_POST);

	}

	public function StampPeriodProject()
	{
		$sess = $this->session->userdata();
		$PeriodID = $_POST["PeriodID"];
		$Comment = $_POST["Comment"];
  		$SignStatus = $sess["Name"];

  		echo $this->Project_Model->StampPeriodProject($PeriodID,$Comment,$SignStatus);
 
	}
	public function GetDataAscPreiod()
	{


		echo json_encode($this->Project_Model->GetDataAscPreiod($_POST["ProjectID"]));


	}
	public function GetDataProjects()
	{

		$sess = $this->session->userdata();

		echo json_encode($this->Project_Model->GetDataProjects($sess["ID"]));


	}
	public function CreateProjectData()
	{
 		

 		$sess = $this->session->userdata();

		#print_r($_POST);  
		#print_r( json_decode($_POST["Employee"],true));  
		#print_r( json_decode($_POST["PeriodInfo"],true));   
		#print_r($_FILES);
 		
		$Employee = json_decode($_POST["Employee"],true);
		$PeriodInfo = json_decode($_POST["PeriodInfo"],true);

		move_uploaded_file($_FILES["DocFile"]["tmp_name"], "/home/jeerawatme/web/projectmanage.webclient.me/public_html/Files/".$_FILES["DocFile"]["name"]);

		$URL = "https://projectmanage.webclient.me/Files/".$_FILES["DocFile"]["name"];

		$ProjectName = $_POST["ProjectName"];
		$Description = $_POST["Description"];
		$ClientCompany = $_POST["ClientCompany"];
		$EndDate = $_POST["EndDate"];
		$Budget = $_POST["Budget"];
		$PeriodDate = $_POST["PeriodDate"];
		$PeriodEndDate = $_POST["PeriodEndDate"];


		$CreatorID = $Employee[0]["Creator"]["MemberID"];
		$CreatorRole = $Employee[0]["Creator"]["MemberRole"];
  

		$Member["ID"][] = $Employee[1]["MemberID1"];
		$Member["ID"][] = $Employee[2]["MemberID2"];
		$Member["ID"][] = $Employee[3]["MemberID3"];
		$Member["Role"][] = $Employee[1]["MemberRole"];
		$Member["Role"][] = $Employee[2]["MemberRole"];
		$Member["Role"][] = $Employee[3]["MemberRole"];


 		echo  $this->Project_Model->CreateProject(date("Y-m-d"),$EndDate,$ProjectName,$Description,$ClientCompany,$Budget,$PeriodDate,$CreatorID,$CreatorRole,$Member,$PeriodInfo,$URL,$PeriodEndDate);




	}
	public function test()
	{

		
		echo $this->Project_Model->CreateProject();


	}







}
