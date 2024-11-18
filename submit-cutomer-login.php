<?php
require_once("model-customer.php");
require_once("util-db.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    // Gather input data
    $firstName = $_POST['inputCustomerFirstName'];
    $lastName = $_POST['inputCustomerLastName'];
    $email = $_POST['inputEmail4'];
    $phone = $_POST['inputPhone'];
    $address = $_POST['inputAddress'];
    $address2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];
    $password = $_POST['inputPassword4'];
    $reenterPassword = $_POST['reenterinputPassword4'];

   
    if ($password !== $reenterPassword) {
        echo "Passwords do not match.";
        exit;
    }

   
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        
        $success = insertCustomer($CustFirst, $CustLast, $CustEmail, $CustPhone, $CustAddress, $CustAddress2, $CustCity, $CustState, $CustZip, $CustPass);
        
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
