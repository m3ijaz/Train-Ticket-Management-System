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
        <h2>Available Train Lists</h2>
        <?php
        require_once('../Management/header.php');
        require_once('../Model/customerdata.php'); 
        $result = train();
        $count = mysqli_num_rows($result);

    ?>

        <table border=1>
            <tr>
                <th> trainNum </th>
                <th> trainRoute </th>
                <th> trainType </th>
                <th> trainDriverName </th>
            </tr>

            <?php 

                while($data = mysqli_fetch_assoc($result)) 
    
                {
                    ?>
                <tr>
                    <td><?php echo $data['trainNum']?></td>
                    <td><?php echo $data['trainRoute']?></td>
                    <td><?php echo $data['trainType']?></td>
                    <td><?php echo $data['trainDriverName']?></td>
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