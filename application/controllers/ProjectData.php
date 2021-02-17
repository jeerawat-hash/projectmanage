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
	public function CreateProjectData()
	{



		#print_r($_POST);
		 
		#print_r($_POST["Employee"]);
	 	foreach ($_POST["Employee"] as $value) {
	 	

	 		print_r($value);



	 	}
		#print_r($_POST["PeriodInfo"]);
	 
		
		#print_r($_FILES);





	}







}
