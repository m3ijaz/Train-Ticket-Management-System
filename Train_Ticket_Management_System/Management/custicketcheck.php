<?php
    require_once('../Model/customerdata.php');

    $Seat_Number = $_REQUEST['cusbookseatNum'];
    $Amount = $_REQUEST['cusbookamount'];
    $Date_of_Booking = $_REQUEST['cusbookdate']; 
    $Train_Number = $_REQUEST['cusbooktrainNum'];

    if ($Seat_Number == null || $Amount == null || $Date_of_Booking == null || $Train_Number == null)
    {
        echo "invalid details";
    }

    else
    {
        $status = bookTickets($Seat_Number, $Amount, $Date_of_Booking, $Train_Number);

        if ($status)
        {
            header('location: ../Presentation/cusbookTickets.php');
        }
        else
        {
            echo "invalid details";
        }
    }

?>