<?php

    require_once('../Model/admindata.php');
     

    $trainNum = $_REQUEST['trainNum'];


    $status = removeTrain($trainNum);

			if($status)
			{
				header('location: ../Presentation/admintrain.php');	
			}
			else
			{
				header('location: ../Presentation/admintrain.php');
			}

 ?>