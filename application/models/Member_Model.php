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


 




   
}

 ?>