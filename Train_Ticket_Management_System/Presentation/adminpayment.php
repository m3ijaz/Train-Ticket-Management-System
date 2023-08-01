<!DOCTYPE html>
<html>
  <head>
    <title>Admin - Payments</title>
    <link rel="stylesheet" type="text/css" href="../Asset/Admin.css">
  </head> 
  <body>
    <header>
      <h1>Train Ticket Management system</h1>
      <nav>
        <ul>
        <li> <a href="./admintrain.php"> Train</a></li>
        <li> <a href="./adminticket.php"> Booking</a></li>
        <li> <a href="./admincustomer.php"> Customers</a></li>
        <li> <a href="./adminpayment.php"> Payment</a></li>
        <li> <a href="./homepage.html"> Logout</a></li>
        </ul>
      </nav>
    </header>
    
    <div align="center">
        <h1>Payment List</h1>
        <?php
        require_once('../Management/header.php');
        require_once('../Model/customerdata.php'); 
        $result = pay();
        $count = mysqli_num_rows($result);

    ?>

        <table border=1>
            <tr>
                <th> Pay_Number </th>
                <th> Date_of_Payment </th>
                <th> Amount </th>
                <th> Pay_Status </th>
                <th> Train_Type </th>
                <th> Customer_Contact </th>
            </tr>

            <?php 

                while($data = mysqli_fetch_assoc($result)) 
    
                {
                    ?>
                <tr>
                    <td><?php echo $data['Pay_Number']?></td>
                    <td><?php echo $data['Date_of_Payment']?></td>
                    <td><?php echo $data['Amount']?></td>
                    <td><?php echo $data['Pay_Status']?></td>
                    <td><?php echo $data['Train_Type']?></td>
                    <td><?php echo $data['Customer_Contact']?></td>
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>

    <footer>
        <p>Train Ticket Management System &copy; 2023</p>
    </footer>
  </body>
</html>
