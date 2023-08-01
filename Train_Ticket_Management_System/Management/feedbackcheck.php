<?php
    require_once('../Model/customerdata.php');

    $Seat_Number = $_REQUEST['cusseatnum'];
    $How_was_your_journey = $_REQUEST['cusfeedback'];
    $Train_Number = $_REQUEST['custrainnum'];

    if ($Seat_Number == null || $How_was_your_journey == null || $Train_Number == null )
    {
        echo "invalid details";
    }

    else
    {
        $status = feedback($Seat_Number, $How_was_your_journey, $Train_Number);

        if ($status)
        {
            header('location: ../Presentation/feedback.php');
        }
        else
        {
            echo "invalid details";
        }
    }

?>