<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectData extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model("Project_Model"); 
		$this->load->library("session"); 
		///// inital mail lib ///////
        require '3rd/mail/class.phpmailer.php'; 
        ///// inital mail lib ///////

	}
	public function index()
	{

		echo $this->Project_Model->DB();
 
	}

	public function GetDataProgress()
	{


		$Project = $this->Project_Model->GetDataProgress();

 		for ($i=0; $i < count($Project); $i++) { 

 			$Project[$i]->Group = $this->Project_Model->GetDataSignEmpInGroup($Project[$i]->ID);

 		}
		
		echo json_encode($Project);
 		///print_r($Project);

		

	}
	public function GetDataNonProgress()
	{
 
		$Project = $this->Project_Model->GetDataNonProgress();

 		for ($i=0; $i < count($Project); $i++) { 

 			$Project[$i]->Group = $this->Project_Model->GetDataSignEmpInGroup($Project[$i]->ID);

 		}
		
		echo json_encode($Project);
 

	}

	public function EditProject()
	{ 

		$ProjectID = $_POST["ProjectID"];
		$EditDate = $_POST["EditDate"];
		$Comment = $_POST["Comment"];
		echo $this->Project_Model->EditProject($ProjectID,$EditDate,$Comment);

	}
	public function DelProject()
	{
		$sess = $this->session->userdata();
		$ProjectID = $_POST["ProjectID"];
		$Comment = $_POST["Comment"]; 
		echo $this->Project_Model->DelProject($ProjectID,$Comment);

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

		move_uploaded_file($_FILES["DocFile"]["tmp_name"], "Files/".$_FILES["DocFile"]["name"]);

		$URL = "https://blueprojectmanagement.com/Files/".$_FILES["DocFile"]["name"];

		$IsExigent = $_POST["IsExigent"];

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


 		echo  $this->Project_Model->CreateProject($IsExigent,date("Y-m-d"),$EndDate,$ProjectName,$Description,$ClientCompany,$Budget,$PeriodDate,$CreatorID,$CreatorRole,$Member,$PeriodInfo,$URL,$PeriodEndDate);




	}
	public function test()
	{

		
		echo $this->Project_Model->CreateProject();


	}
	public function uploadtest()
	{

		
		print_r($_FILES);
		print_r($_POST);


	}

	public function SetDataFinistProject()
	{
		 
		
		
		$URL = "https://blueprojectmanagement.com/Files/0";

		if(isset($_FILES["DocFileFinal"]["tmp_name"])){

			move_uploaded_file($_FILES["DocFileFinal"]["tmp_name"], "Files/".$_FILES["DocFileFinal"]["name"]);

			$URL = "https://blueprojectmanagement.com/Files/".$_FILES["DocFileFinal"]["name"];

		}

		

		echo $this->Project_Model->SetDataFinistProject($_POST["ProjectID"],$URL);

	}
	public function setDataNotify()
	{
 

		$this->Project_Model->setDataNotify();


	}
	public function SendNotify()
	{


		$data = $this->Project_Model->getDataForNotify();
		$msg = "แจ้งเตือนโครงการใกล้ครบกำหนด\nลูกค้า : ".$data[0]->ClientCompany."\nงาน : ".$data[0]->Name."\nกรุณาตรวจสอบรายละเอียดเพิ่มเติมที่\nhttps://blueprojectmanagement.com/";
		SendMail_attach( $data[0]->Email, $msg,"แจ้งเตือนโครงการ ".$data[0]->Name." ใกล้ครบกำหนด","ระบบบริหารจัดการโครงการ Blueprojectmanagement" );
		notify($msg,$data[0]->LineToken);

		
	}






}





function SendMail_attach( $ToEmail, $MessageHTML,$header,$Fromname ) {
  
	$Mail = new PHPMailer();
	$Mail->IsSMTP(); // Use SMTP 
	$Mail->Host        = "127.0.0.1";
	#$Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
	$Mail->SMTPAuth    = TRUE; // enable SMTP authentication
	$Mail->SMTPSecure  = "tls"; //Secure conection
	$Mail->Port        =  25; // set the SMTP port //edit
	$Mail->Username    = 'noreply@blueprojectmanagement.com';  //edit
	$Mail->Password    = 'p@ssw0rd123456789';  //edit
   
	$Mail->CharSet     = 'UTF-8'; 
	$Mail->Subject     = $header; //edit  
	$Mail->ContentType = 'text/html; charset=utf-8\r\n';
	$Mail->From        = 'noreply@blueprojectmanagement.com'; //edit
	$Mail->FromName    = $Fromname;  //edit
	$Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line
   
   
	$Mail->AddAddress( $ToEmail ); 
	$Mail->Body   = $MessageHTML; 
   
  
	if ( $Mail->Send() ) {
  
	$Mail->ClearAddresses($ToEmail);
	$Mail->SmtpClose();
  
		return '200';
	}else{
		return '400';
	}
  
  }


  function notify($message,$token){

	$lineapi = $token; 
   $mms =  trim($message); 
//   date_default_timezone_set("Asia/Bangkok");
   $con = curl_init();
   curl_setopt( $con, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
   // SSL USE 
   curl_setopt( $con, CURLOPT_SSL_VERIFYHOST, 0); 
   curl_setopt( $con, CURLOPT_SSL_VERIFYPEER, 0); 
   //POST 
   curl_setopt( $con, CURLOPT_POST, 1); 
   curl_setopt( $con, CURLOPT_POSTFIELDS, "message=$mms"); 
   curl_setopt( $con, CURLOPT_FOLLOWLOCATION, 1); 
   $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
	 curl_setopt($con, CURLOPT_HTTPHEADER, $headers); 
   curl_setopt( $con, CURLOPT_RETURNTRANSFER, 1); 
   $result = curl_exec( $con ); 

}