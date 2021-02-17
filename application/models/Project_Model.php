<?php 
class Project_Model extends CI_Model
{ 

 
	public function CreateProject()
	{ 

        $this->pmdb = $this->load->database("pmdb",true); 
        
        $this->pmdb->query("INSERT INTO Project (ID, SignGroupID, Name, Detail, Budget, DocFile, BeginDate, EndDate, CheckDate, Remark, IsSuccess) VALUES (NULL, '1', 'โครงการแปลหนังสือภาษา C', '', '200000', 'https://www.unf.edu/~wkloster/2220/ppts/cprogramming_tutorial.pdf', '2021-02-16', '2022-02-16', '0', '', '0') ");


        $GetCreateRowID = $this->pmdb->query("
        	SELECT LAST_INSERT_ID() as ROWID ")->result();



        /////// While Preiod //////
        $this->pmdb->query(" INSERT INTO ProjectPeriod (ID, ProjectID, DueDate, DueStatus, SignStatus, Comment, PeriodDetail) VALUES (NULL, '".$GetCreateRowID[0]->ROWID."', '2021-05-01', '0', '', '', 'ส่งตรวจสอบ') ");
        /////// While Preiod //////

	

        $GetLastGroupID = $this->pmdb->query("
        	select DISTINCT ID FROM SignGroup ORDER by ID desc limit 1 ")->result();
        

        $GroupID = (int)$GetLastGroupID[0]->ID + 1;


        ////// While Member /////
        $this->pmdb->query(" INSERT INTO SignGroup (ID, MemberID, Role) VALUES ('".$GroupID."', '2', 'SR') ");
        ////// While Member /////



        

        return $GroupID;


	}


 




   
}

 ?>

