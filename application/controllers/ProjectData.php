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



		print_r($_POST);
		echo "---";
		print_r($_POST["Employee"]);
		echo "---";
		print_r($_POST["PeriodInfo"]);
		echo "---";
		
		#print_r($_FILES);





	}







}
