<!DOCTYPE html>
<html>
  <head>
    <title>Admin - Customers</title>
    <link rel="stylesheet" type="text/css" href="../Asset/Admin.css"> 
  </head>
  <body>
    <header>
      <h1>Train Ticket Management System</h1>
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
        <h1>Customers List</h1>
        <?php
        require_once('../Management/header.php');
        require_once('../Model/customerdata.php'); 
        $result = cusdetail();
        $count = mysqli_num_rows($result);

    ?>

        <table border=1>
            <tr>
                <th> Name </th>
                <th> Email </th>
                <th> Age </th>
                <th> Password </th>
                <th> Gender </th>
                <th> Profession </th>
                <th> Contact </th>
            </tr>

            <?php 

                while($data = mysqli_fetch_assoc($result)) 
    
                {
                    ?>
                <tr>
                    <td><?php echo $data['Name']?></td>
                    <td><?php echo $data['Email']?></td>
                    <td><?php echo $data['Age']?></td>
                    <td><?php echo $data['Password']?></td>
                    <td><?php echo $data['Gender']?></td>
                    <td><?php echo $data['Profession']?></td>
                    <td><?php echo $data['Contact']?></td>
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
