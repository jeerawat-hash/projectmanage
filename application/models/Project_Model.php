<?php 
class Project_Model extends CI_Model
{ 

        public function EditProject($ProjectID,$EditDate,$Comment)
        {

                $this->pmdb = $this->load->database("pmdb",true); 


                $Project =  $this->pmdb->query("  UPDATE Project SET EndDate = '".$EditDate."' , Remark = '".$Comment."' WHERE ID = '".$ProjectID."'  ");

                return 1;

        }
        public function DelProject($ProjectID,$Comment)
        {

                $this->pmdb = $this->load->database("pmdb",true); 

                $Period =  $this->pmdb->query(" UPDATE Project SET Remark = '".$Comment."',IsCancel = '1' WHERE Project.ID = '".$ProjectID."' ");

                return 1;

        }

        public function StampPeriodProject($PeriodID,$Comment,$SignStatus)
        {

                $this->pmdb = $this->load->database("pmdb",true); 

                $Period =  $this->pmdb->query(" UPDATE ProjectPeriod SET DueStatus = 1,SignStatus = '".$SignStatus."',Comment = '".$Comment."' WHERE ProjectPeriod.ID = '".$PeriodID."' ");

                return 1;

        }

        public function GetDataProgress()
        {


                $this->pmdb = $this->load->database("pmdb",true); 

                $Project = $this->pmdb->query(" select *, (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) as PeriodNotify ,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate  ,(case 

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) > CURDATE() 
          then '0'

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) <= CURDATE() 
          then '1'  

          end) as StatusProject
,(case 

          when (SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1)  < CURDATE() 
          then  '1'
           else '0'

          end) as IsOverDue from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0  and IsCancel = 0
)a where Progress != 0 ")->result();


                return $Project;


        }

        public function GetDataNonProgress()
        {


                $this->pmdb = $this->load->database("pmdb",true); 

                $Project = $this->pmdb->query(" select *, (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) as PeriodNotify ,(SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1) as LastPeriodDate  ,(case 

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) > CURDATE() 
          then '0'

          when (DATE_ADD((SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1), INTERVAL -a.PeriodEndDate DAY) ) <= CURDATE() 
          then '1'  

          end) as StatusProject
,(case 

          when (SELECT DueDate FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 0 order by DueDate asc limit 1)  < CURDATE() 
          then  '1'
           else '0'

          end) as IsOverDue from(
SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0  and IsCancel = 0
)a where Progress = 0 ")->result();


                return $Project;


        }

        public function GetDataSignEmpInGroup($ProjectID)
        {

                $this->pmdb = $this->load->database("pmdb",true); 

                $Member =  $this->pmdb->query(" SELECT b.Username,'https://projectmanage.webclient.me/assets/dist/img/avatar.png' FROM SignGroup a 
                join Member b on a.MemberID = b.ID
                where a.ID = (select SignGroupID from(
                SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                                FROM Project a where IsSuccess = 0  
                )a where ID = ".$ProjectID.") and a.MemberID != 0 ")->result();
 
                return $Member;

        }

        public function GetDataAscPreiod($ProjectID)
        {

                $this->pmdb = $this->load->database("pmdb",true); 


                $Period =  $this->pmdb->query(" SELECT ID,PeriodDetail,DueDate,SignStatus,Comment FROM ProjectPeriod WHERE ProjectID = ".$ProjectID." and DueStatus = 0 order by DueDate asc limit 1 ")->result();


                return $Period;

        }
        public function GetDataProjectsInfo($ProjectID)
        {

                $this->pmdb = $this->load->database("pmdb",true); 


                $Project =  $this->pmdb->query(" SELECT a.*,(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = '".$ProjectID."' ) as CoutPreiod,b.Name as CreateMemberName FROM Project a join Member b on a.CreateMemberID = b.ID WHERE a.ID = '".$ProjectID."' ")->result();


                $ProjectPeriod = $this->pmdb->query(" SELECT PeriodDetail,DueDate,SignStatus,Comment FROM ProjectPeriod WHERE ProjectID = ".$ProjectID." ")->result();


                return array('ProjectInfo' => $Project, 'Period' => $ProjectPeriod );
 

        }


        public function GetDataProjects($Member)
        {


                $this->pmdb = $this->load->database("pmdb",true); 

                /*return $this->pmdb->query(" SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = a.ID and DueStatus = 1 )) ) as Progress
                FROM Project a where IsSuccess = 0 ")->result();
                */

                return $this->pmdb->query(" SELECT *,( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ab.ID and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ab.ID) * 100) ) as percent,
                ( select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ab.ID) - (SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ab.ID and DueStatus = 1 )) ) as Progress ,
                (
                SELECT a.Role FROM SignGroup a 
                join Member b on a.MemberID = b.ID
                join Project c on a.ID = c.SignGroupID where a.MemberID = ".$Member." and c.ID = ab.ID
                ) as Policy
                FROM Project ab where IsSuccess = 0 and IsCancel = 0 ")->result();
 


        }
        public function GetDataPercent($ProjectID)
        {


                $this->pmdb = $this->load->database("pmdb",true); 

                return $this->pmdb->query(" select ((SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ".$ProjectID." and DueStatus = 1)/(SELECT count(*) FROM ProjectPeriod WHERE ProjectID = ".$ProjectID.") * 100) as percent ")->result();


        }
 
	public function CreateProject($StartDate,$StopDate,$ProjectName,$Description,$ClientCompany,$Budget,$PeriodDate,$CreatorID,$CreatorRole,$Member,$PeriodInfo,$URL,$PeriodEndDate)
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


        $this->pmdb->query("INSERT INTO Project (ID, SignGroupID, Name, Detail, Budget, DocFile, BeginDate, EndDate, CheckDate, Remark, IsSuccess, ClientCompany, PeriodEndDate,CreateMemberID) VALUES (NULL, '".$GroupID."', '".$ProjectName."', '".$Description."', '".$Budget."', '".$URL."', '".$StartDate."', '".$StopDate."', '".$PeriodDate."', '', '0','".$ClientCompany."','".$PeriodEndDate."','".$CreatorID."') ");


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

