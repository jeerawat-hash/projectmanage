<?php 
class Member_Model extends CI_Model
{ 

 
	public function DB()
	{


        $this->pmdb = $this->load->database("pmdb",true);


        if ($this->pmdb) {
        	return 1;
        }else{
        	return 0;
        }


	}

	public function QueryMemberNotIn($MemberID)
	{ 
        $this->pmdb = $this->load->database("pmdb",true); 
        return $this->pmdb->query(" SELECT * FROM Member WHERE ID != '".$MemberID."' ")->result(); 
	}


	public function QueryMemberLogin($username=null,$password=null)
	{ 
        $this->pmdb = $this->load->database("pmdb",true); 
        return $this->pmdb->query("SELECT * FROM Member where  Username =  '".$username."'  and  Password  = '".$password."'  ")->result(); 
	}
        public function GetDataMember()
        {
                $this->pmdb = $this->load->database("pmdb",true); 
                return $this->pmdb->query(" SELECT a.Username,a.ID,Name,b.Detail,Telephone,a.LineToken,a.Email FROM Member a
                join Position b on a.PositionID = b.ID ")->result();

        }
        public function GetDataMemberByID($MemberID)
        {
                $this->pmdb = $this->load->database("pmdb",true); 
                return $this->pmdb->query(" SELECT a.Username,a.ID,Name,b.Detail,Telephone,a.LineToken,a.Email FROM Member a join Position b on a.PositionID = b.ID where a.ID = '".$MemberID."' ")->result();
                
        }
        public function Register($PositionID,$Username,$Password,$Name,$DOB,$Telephone,$Email,$LineToken = "")
        {
                $this->pmdb = $this->load->database("pmdb",true); 
                $this->pmdb->query("  INSERT INTO Member (ID, PositionID, Username, Password, Name, DOB, Telephone, Email, LineToken) VALUES (NULL, '".$PositionID."', '".$Username."', '".$Password."', '".$Name."', '".$DOB."', '".$Telephone."', '".$Email."', '".$LineToken."') ");


                return 1;
               


        }




   
}

 ?>