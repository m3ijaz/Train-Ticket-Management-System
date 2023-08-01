<?php
    require_once('../Model/customerdata.php');

    $Pay_Number = $_REQUEST['cusnum'];
    $Date_of_Payment = $_REQUEST['cuspay'];
    $Amount = $_REQUEST['cusamount'];
    $Pay_Status = $_REQUEST['cuspaystatus'];
    $Train_Type = $_REQUEST['custype'];
    $Customer_Contact = $_REQUEST['cuscontact'];

    if ($Pay_Number == null || $Date_of_Payment == null || $Amount == null || $Pay_Status == null || $Train_Type == null || $Customer_Contact == null)
    {
        echo "invalid details";
    }

    else
    {
        $status = payment($Pay_Number, $Date_of_Payment, $Amount, $Pay_Status, $Train_Type, $Customer_Contact);

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