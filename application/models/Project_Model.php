<?php 
class Project_Model extends CI_Model
{ 


        public function GetDataPercent($ProjectID)
        {


                $this->pmdb = $this->load->database("pmdb",true); 

                return $this->pmdb->query(" select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ".$ProjectID." and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ".$ProjectID.") * 100) as percent ")->result();


        }
 
	public function CreateProject($StartDate,$StopDate,$ProjectName,$Description,$ClientCompany,$Budget,$PeriodDate,$CreatorID,$CreatorRole,$Member,$PeriodInfo,$URL)
	{ 

		$isSuccess = 0;

        $this->pmdb = $this->load->database("pmdb",true); 
 
        $GetLastGroupID = $this->pmdb->query("
        	select DISTINCT ID FROM SignGroup ORDER by ID desc limit 1 ")->result();
       
        $GroupID = (int)$GetLastGroupID[0]->ID + 1;

        ////// While Member /////
        //Creator
        $this->pmdb->query(" INSERT INTO SignGroup (ID, MemberID, Role) VALUES ('".$GroupID."', '".$CreatorID."', '".$CreatorRole."') ");
        //Creator
 		/// Member
        for ($i=0; $i < count($Member["ID"]); $i++) { 
        	 
                if ($Member["ID"] != 0) {
                        $this->pmdb->query(" INSERT INTO SignGroup (ID, MemberID, Role) VALUES ('".$GroupID."', '".$Member["ID"][$i]."', '".$Member["Role"][$i]."') ");
                }

        	$isSuccess = 1;
 
        } 
        ////// While Member /////


        $this->pmdb->query("INSERT INTO Project (ID, SignGroupID, Name, Detail, Budget, DocFile, BeginDate, EndDate, CheckDate, Remark, IsSuccess) VALUES (NULL, '".$GroupID."', '".$ProjectName."', '".$Description."', '".$Budget."', '".$URL."', '".$StartDate."', '".$StopDate."', '".$PeriodDate."', '', '0') ");


        $GetCreateRowID = $this->pmdb->query("
        	SELECT LAST_INSERT_ID() as ROWID ")->result();

 
        /////// While Preiod //////

        for ($i=0; $i < count($PeriodInfo["Detail"]); $i++) { 

        	$this->pmdb->query(" INSERT INTO ProjectPeriod (ID, ProjectID, DueDate, DueStatus, SignStatus, Comment, PeriodDetail) VALUES (NULL, '".$GetCreateRowID[0]->ROWID."', '".$PeriodInfo["Date"][$i]."', '0', '', '', '".$PeriodInfo["Detail"][$i]."') ");

        	$isSuccess = 1;
 
        } 
        /////// While Preiod //////
 

        return $isSuccess;


	}


 




   
}

 ?>

