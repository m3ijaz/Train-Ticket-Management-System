<?php
	require_once ('../Model/customerdata.php');

	
		$Name = $_REQUEST['customerName'];
		$Email = $_REQUEST['customerEmail'];
        $Age = $_REQUEST['customerAge'];
		$Password = $_REQUEST['customerPassword'];
        $Gender = $_REQUEST['customerGender'];
		$Profession = $_REQUEST['customerProfession'];
		$Contact = $_REQUEST['customerContact'];	
		

		if ($Name == null || $Email == null || $Age == null ||  $Password == null || $Gender == null || $Profession == null || $Contact == null ) 
        {
            echo "invalid details";
        }


        else
        {
				$status = Registration($Name, $Email, $Age, $Password, $Gender, $Profession,  $Contact);
				
                if ($status)
                {
                    header('location: ../Presentation/customerLogin.html');
                }
                else
                {
                    echo "invalid details";
                }
        } 

    

?>