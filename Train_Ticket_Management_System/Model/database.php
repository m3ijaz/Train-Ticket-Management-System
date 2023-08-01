<?php 


    $host = "localhost";
    $dbname = "train ticket management system"; 
    $dbpass = "";
    $dbuser = "root";


    function getConnection()

    { 
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;


        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
    }



?>