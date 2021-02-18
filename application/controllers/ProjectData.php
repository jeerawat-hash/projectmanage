<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectData extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Project_Model"); 

	}
	public function index()
	{

 
	}
	public function GetDataProjects()
	{


		echo json_encode($this->Project_Model->GetDataProjects());


	}
	public function CreateProjectData()
	{
 
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
		$Budget = $_POST["Budget"];
		$PeriodDate = $_POST["PeriodDate"];


		$CreatorID = $Employee[0]["Creator"]["MemberID"];
		$CreatorRole = $Employee[0]["Creator"]["MemberRole"];
  

		$Member["ID"][] = $Employee[1]["MemberID1"];
		$Member["ID"][] = $Employee[2]["MemberID2"];
		$Member["ID"][] = $Employee[3]["MemberID3"];
		$Member["Role"][] = $Employee[1]["MemberRole"];
		$Member["Role"][] = $Employee[2]["MemberRole"];
		$Member["Role"][] = $Employee[3]["MemberRole"];


 		echo  $this->Project_Model->CreateProject(date("Y-m-d"),date("Y-m-d"),$ProjectName,$Description,$ClientCompany,$Budget,$PeriodDate,$CreatorID,$CreatorRole,$Member,$PeriodInfo,$URL);



	}
	public function test()
	{

		
		echo $this->Project_Model->CreateProject();


	}







}
