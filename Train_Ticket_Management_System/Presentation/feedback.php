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

    <main> 
    <h1 align="center">Please provide us your Feedback</h1>
    </main>

    <div align="center">
        <form name="feedbackForm" method="POST" action="../Management/feedbackcheck.php">      
        <table>
            <tr> 
                <td> Seat_Number : </td>
                <td> <input type="number" placeholder="your seat number?" name="cusseatnum" value="" required /> </td>
            </tr> 
            <tr> 
                <td> How_was_your_journey : </td>
                <td> <input type="text" placeholder="did you enjoy?" name="cusfeedback" value="" required /> </td>
            </tr>
            <tr> 
                <td> Train_Number : </td>
                <td> <input type="number" placeholder="your train number?" name="custrainnum" value="" required /> </td>
            </tr>
        </table>

        <input type="submit" name="feedbackSubmit" value="Publish" required />
        </form>

        <div style="color: red;" align="center"> 
        </div>
    </div>

    <footer>
        <p>Train Ticket Management System &copy; 2023</p>
    </footer>
</body>

</html>