<?php
require_once("model-customer.php");
require_once("util-db.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

   
    
    $CustFirst = $_POST['inputCustomerFirstName'];
    $CustLast = $_POST['inputCustomerLastName'];
    $CustEmail = $_POST['inputEmail4'];
    $CustPhone = $_POST['inputPhone'];
    $CustAddress = $_POST['inputAddress'];
    $CustAddress2 = $_POST['inputAddress2'];
    $CustCity = $_POST['inputCity'];
    $CustState = $_POST['inputState'];
    $CustZip = $_POST['inputZip'];
    $CustPass = $_POST['inputPassword4'];
    $ReenterCustPass = $_POST['reenterinputPassword4'];

   
    if ($CustPass !== $ReenterCustPass) {
        echo "Passwords do not match.";
        exit;
    }

   
    $hashedPassword = password_hash($CustPass, PASSWORD_BCRYPT);

    try {
       
        $success = insertCustomer($CustFirst, $CustLast, $CustEmail, $CustPhone, $CustAddress, $CustAddress2, $CustCity, $CustState, $CustZip, $hashedPassword);
        
        if ($success) {
            
            header("Location: success-create-customer-login.php");
            exit;
        } else {
            echo "Failed to create account. Please try again.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>

