<!DOCTYPE html> 
<html>
  <head>
    <title>Admin - Tickets</title>
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
    
    <main>
      <h2 align="center">All Booked Ticket Lists</h2>
    </main>

    <div align="center">
    
    <?php
        require_once('../Management/header.php');
        require_once('../Model/admindata.php'); 
        $result = tickets();
        $count = mysqli_num_rows($result);
        ?>

        <table border=1> 
        <tr> 
          <th> Seat_Number </th>
          <th> Amount </th>
          <th> Date_of_Booking </th>
          <th> Train_Number </th>
        </tr>

        <?php 
        while($data = mysqli_fetch_assoc($result)) 
    
        {
            ?>
        <tr>
            <td><?php echo $data['Seat_Number']?></td>
            <td><?php echo $data['Amount']?></td>
            <td><?php echo $data['Date_of_Booking']?></td>
            <td><?php echo $data['Train_Number']?></td>
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
