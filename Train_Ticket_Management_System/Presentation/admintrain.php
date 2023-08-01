

<html>

<head>
    <title>Admin_Train</title>
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
        <h2 align="center">Available Train List</h2>

        <?php
        require_once('../Management/header.php');
        require_once('../Model/admindata.php'); 
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
                    <td><a href="adtraindelete.php?trainNum=<?php echo  $data['trainNum'];?>"> Remove </a>
                    </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>

    <br><br>
    <div align="center">
        <h2> Add Train </h2>

        <form name="addTrainForm" method="POST" action="../Management/addTrainController.php">
            <table>
                <tr>
                    <td> Train Number: </td>
                    <td> <input type="number" name="trainNum" value="" required /> </td>
                </tr>
                <tr>
                    <td> Train Route: </td>
                    <td> <input type="text" placeholder="Dhaka to Chittagong" name="trainRoute" value="" required /> </td>
                </tr>
                <tr>
                    <td> Train Type: </td>
                    <td>
                        <select name="trainType">
                            <option value="ac">AC</option>
                            <option value="non ac">NON-AC</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Train Driver Name: </td>
                    <td> <input type="text" name="trainDriverName" value="" required /> </td>
                </tr>
            </table>

            <br>
            <input type="submit" name="addTrainSubmit" value="Add" required />
        </form>
    </div>


    <br>

    <footer>
        <p>Train Ticket Management System &copy; 2023</p>
    </footer>
</body>

</html>