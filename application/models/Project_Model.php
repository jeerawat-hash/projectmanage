<?php 
class Project_Model extends CI_Model
{ 

 
	public function CreateProject()
	{ 
        $this->pmdb = $this->load->database("pmdb",true); 
        $this->pmdb->query("INSERT INTO Project (ID, SignGroupID, Name, Detail, Budget, DocFile, BeginDate, EndDate, CheckDate, Remark, IsSuccess) VALUES (NULL, '1', 'โครงการแปลหนังสือภาษา C', '', '200000', 'https://www.unf.edu/~wkloster/2220/ppts/cprogramming_tutorial.pdf', '2021-02-16', '2022-02-16', '0', '', '0') ");


        $GetCreateRowID = $this->pmdb->query("
        	SELECT LAST_INSERT_ID() as ROWID ")->result();


        return $GetCreateRowID[0]->ROWID;

	}


 




   
}

 ?>

