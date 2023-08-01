<?php
	require_once ('../Model/admindata.php');

	if (isset($_REQUEST['removeCustomerSubmit'])) {
        $customerID = $_POST['remove_CustomerID'];
        
        $customerContact = $_POST['customer_contact'];

		if ($customerID != null) {
				$status = removeCustomer($customerID);
				if ($status) {
                    header('location: ../Presentation/admincustomer.php');
                } else {
                    header('location: ../Presentation/admincustomer.php?');
                }
        } else {
            echo "Null Submission!";
        }
    }
?>