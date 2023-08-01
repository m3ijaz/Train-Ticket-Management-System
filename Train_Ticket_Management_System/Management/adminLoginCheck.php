<?php
    session_start();

    require_once('../Model/admindata.php');

	$Username = $_REQUEST['adminUsername'];
	$Password = $_REQUEST['adminPassword'];

	if ($Username == null || $Password == null) 
    {
        echo "Invald username/password";
    }

    else
    {
        $status = Login($Username, $Password);

        if ($status)
        {
            setcookie('status', 'true', time()+720, '/');
            header('location: ../Presentation/Admin.html');
        }
        else
        {
            echo "Invald user!";
        }
    }

?>