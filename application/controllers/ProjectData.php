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
		echo $_POST["Creator"][1];
		#print_r($_FILES);





	}







}
