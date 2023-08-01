<?php
    session_start();

    require_once ('../Model/customerdata.php');

	
		$Contact = $_REQUEST['Contact'];
		$Password = $_REQUEST['Password'];

		if ($Contact == null || $Password == null) 
		{
			echo "Invald Contact/Password";
		}
        
		else
		{
			$status = Login($Contact, $Password);
	
			if ($status)
			{
				setcookie('status', 'true', time()+720, '/');
				header('location: ../Presentation/Customer.html');
			}
			else
			{
				echo "Invald user!";
			}
		}
	
?>