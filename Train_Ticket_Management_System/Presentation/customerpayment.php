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
    <h1 align="center">Please Complete Your Payments</h1>
    </main>

    <div align="center">
    <form name="payment" method="POST" action="../Management/duecheck.php">      

            <table> 
            <tr> 
                <td> Pay_Number : </td>
                <td> <input type="number" placeholder="your paying number?" name="cusnum" value="" required /> </td>
            </tr> 
            <tr> 
                <td> Date_of_Payment : </td>
                <td> <input type="date"  name="cuspay" value="" required /> </td>
            </tr> 
            <tr> 
                <td> Amount : </td>
                <td> <input type="number" placeholder="amount" name="cusamount" value="" required /> </td>
            </tr>
            <tr> 
                <td> Pay_Status : </td>
                <td> <input type="text" placeholder="yes/no" name="cuspaystatus" value="" required /> </td>
            </tr> 
            <tr> 
                <td> Train_Type : </td>
                <td> <input type="text" placeholder="AC/ Non-AC?" name="custype" value="" required /> </td>
            </tr> 
            <tr> 
                <td> Customer_Contact : </td>
                <td> <input type="number" placeholder="contact" name="cuscontact" value="" required /> </td>
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