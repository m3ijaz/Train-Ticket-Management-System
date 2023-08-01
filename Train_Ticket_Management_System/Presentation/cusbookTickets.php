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
    <h2 align="center">Book Your Journey</h2>
    </main>

    <div align="center">
        <form name="bookTicketForm" method="POST" action="../Management/custicketcheck.php">      
        <table> 
            <tr> 
                <td> Seat_Number: </td>
                <td> <input type="number" placeholder="seat available 1-74" name="cusbookseatNum" value="" required /> </td>
            </tr>
            <tr> 
                <td> Amount: </td>
                <td> 
                    <select name="cusbookamount">
                        <option value="400">400</option>
                        <option value="700">700</option>
                        <option value="1000">1000</option>
                        <option value="1200">1200</option>
                        <option value="1500">1500</option>
                        <option value="2000">2000</option>
                        <option value="2500">2500</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td> Date_of_Booking: </td>
                <td> <input type="date" name="cusbookdate" value="" required /> </td>
            </tr>
            <tr> 
                <td> Train_Number: </td>
                <td> <input type="number" placeholder="add number" name="cusbooktrainNum" value="" requiered /></td>
            </tr>
        </table>
        
        <input type="submit" name="bookSubmit" value="Book" required />
        </form>

        <div style="color: red;" align="center">  </div>
    </div>

    <footer>
        <p>Train Ticket Management System &copy; 2023</p>
    </footer>
</body>

</html>