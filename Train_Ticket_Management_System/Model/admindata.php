<?php
require_once('database.php');

//for registration

function Registration($Name, $Email, $Contact, $Username, $Password)
{
    $conn = getConnection();
    $sql = "insert into admindetail values('{$Name}', '{$Email}', '{$Contact}', '{$Username}', '{$Password}')";

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

function login($Username, $Password)
{
    $conn = getConnection();
    $sql = "select * from admindetail where username='{$Username}' and password='{$Password}' ";
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



//adding train

function addTrain($trainNum, $trainRoute, $trainType, $trainDriverName)
{
    $conn = getConnection();
    $sql = "insert into trains values('{$trainNum}', '{$trainRoute}', '{$trainType}', '{$trainDriverName}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }

    else
    {
        return false;
    }

}


//show table

function train()
{
    $conn = getConnection();
    $sql = "select * from trains ";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function adminviewbytNum($trainNum)
{
  $conn = getConnection();
  $sql = "select * from trains where trainNum = {$trainNum}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}



//removing train

function removeTrain($trainNum)
{
    $conn = getConnection();
    $sql = "delete from trains where trainNum ={$trainNum}";

    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//Showing tickets
function showTickets()
{
    $conn = getConnection();
    $sql = "SELECT * FROM tickets";
    $result = mysqli_query($conn, $sql);

    if (!$result) 
    {
        exit("Error in SQL: " . mysqli_error($conn));
    }

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $data[] = $row;
    }

    mysqli_free_result($result);
    mysqli_close($conn);

    return $data;
}


//show table

function tickets()
{
    $conn = getConnection();
    $sql = "select * from tickets ";
    $result = mysqli_query($conn, $sql);
    return $result;
}


//Customers

function removeCustomer($customerID)
{
    $conn = getConnection();
    $sql = "delete from customers where ID = {$customerID}";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        return true;
    } else {
        mysqli_close($conn);
        return false;
    }
}

//show table

function customers()
{
    $conn = getConnection();
    $sql = "select * from customers ";
    $result = mysqli_query($conn, $sql);
    return $result;
}



//payment methods

function showAdminPayments()
{
    $conn = getConnection();
    $sql = "SELECT * FROM payment";
    $result = mysqli_query($conn, $sql);

    if (!$result) 
    {
        exit("Error in SQL: " . mysqli_error($conn));
    }

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) 
    {
        $data[] = $row;
    }

    mysqli_free_result($result);
    mysqli_close($conn);

    return $data;
}


//show table

function payment()
{
    $conn = getConnection();
    $sql = "select * from payment ";
    $result = mysqli_query($conn, $sql);
    return $result;
}














?>
