<!DOCTYPE html>
<html>

<head>
    <title>CUSTOMER - Train Ticket Management System</title>
    <link rel="stylesheet" type="text/css" href="../Asset/Customer.css">
</head>

<body>
    <header>
        <h1>Train Ticket Management System</h1>
        <nav>
            <ul>
                <li><a href="customertrain.php">View Trains</a></li>
                <li><a href="cusbookTickets.php">Book Ticket</a></li>
                <li><a href="cusviewBookings.php">View Bookings</a></li>
                <li><a href="feedback.php">Provide Feedback</a></li>
                <li><a href="customerpayment.php">Payment</a></li>
                <li><a href="homepage.html">Logout</a></li>
            </ul> 
        </nav>
    </header>

    <div align="center">
        <h2>Already Booked Train Lists</h2>
        <?php
        require_once('../Management/header.php');
        require_once('../Model/customerdata.php'); 
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