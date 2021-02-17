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



		echo json_encode($_POST);
		echo json_encode($_FILES);





	}







}
