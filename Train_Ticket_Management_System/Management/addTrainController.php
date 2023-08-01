<?php
	require_once ('../Model/admindata.php');

	if (isset($_REQUEST['addTrainSubmit'])) 
    {
		$trainNum = $_POST['trainNum'];
		$trainRoute = $_POST['trainRoute'];
        $trainType = $_POST['trainType'];
		$trainDriverName = $_POST['trainDriverName'];

		if ($trainNum == null || $trainRoute == null || $tranType == null || $tranDriverName == null) 
        {
			
				$status = addTrain($trainNum, $trainRoute, $trainType, $trainDriverName);
				if ($status)
                {
                    header('location: ../Presentation/admintrain.php');
                } 

                else 
                {
                    header('location: ../Presentation/admintrain.php');
                }

        } 
        
        else 
        {
            echo "Null Submission!";
        }
    }
?>