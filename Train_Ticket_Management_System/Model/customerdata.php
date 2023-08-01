<?php
require_once('database.php');

//for registration

function Registration($Name, $Email, $Age, $Password, $Gender, $Profession, $Contact)
{
    $conn = getConnection();
    $sql = "insert into cusdetail values('{$Name}', '{$Email}', '{$Age}', '{$Password}', '{$Gender}',  '{$Profession}', '{$Contact}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else 
    {
        return false;
    }
}


//for login

function login($Contact, $Password)
{
    $conn = getConnection();
    $sql = "select * from cusdetail where contact='{$Contact}' and password='{$Password}' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);


    if($count > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

//View Customer Details
function cusdetail()
{
    $conn = getConnection();
    $sql = "select * from cusdetail ";
    $result = mysqli_query($conn, $sql);
    return $result;
}


//view payment information
function pay()
{
    $conn = getConnection();
    $sql = "select * from payment ";
    $result = mysqli_query($conn, $sql);
    return $result;
}




//view trains

function train()
{
    $conn = getConnection();
    $sql = "select * from trains ";
    $result = mysqli_query($conn, $sql);
    return $result;
}


//booking Tickets

function bookTickets($Seat_Number, $Amount, $Date_of_Booking, $Train_Number)
{
    $conn = getConnection();
    $sql = "insert into tickets values('{$Seat_Number}', '{$Amount}', '{$Date_of_Booking}', '{$Train_Number}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else 
    {
        return false;
    }
}

//view booked tickets

function tickets()
{
    $conn = getConnection();
    $sql = "select * from tickets ";
    $result = mysqli_query($conn, $sql);
    return $result;
}


//provide feedback
function feedback($Seat_Number, $How_was_your_journey, $Train_Number)
{
    $conn = getConnection();
    $sql = "insert into feedback values('{$Seat_Number}', '{$How_was_your_journey}', '{$Train_Number}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else 
    {
        return false;
    }
}


//Payment Method
function payment($Pay_Number, $Date_of_Payment, $Amount, $Pay_Status, $Train_Type, $Customer_Contact)
{
    $conn = getConnection();
    $sql = "insert into payment values('{$Pay_Number}', '{$Date_of_Payment}', '{$Amount}', '{$Pay_Status}', '{$Train_Type}', '{$Customer_Contact}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else 
    {
        return false;
    }
}
























?>
