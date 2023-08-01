<?php
    require_once('../Model/admindata.php');


		$Name = $_REQUEST['adminName'];
		$Email = $_REQUEST['adminEmail'];
        $Contact = $_REQUEST['adminContact'];
		$Username = $_REQUEST['adminUsername'];
		$Password = $_REQUEST['adminPassword'];

        if ($Name == null || $Email == null || $Contact == null || $Username == null || $Password == null)
        {
            echo "invalid details";
        }

        else  
        {
            $status = Registration($Name, $Email, $Contact, $Username, $Password);

            if ($status)
            {
                header('location: ../Presentation/adminLogin.html');
            }
            else
            {
                echo "invalid details";
            }
        }

?>