<?php
require_once("util-db.php"); 
require_once("model-customer.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
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

  
    $conn = get_db_connection();
    if ($conn) { 
        $stmt = $conn->prepare("INSERT INTO customer_table 
            (Customer_FirstName, Customer_LastName, Customer_Email, Customer_Phone, Customer_Address, Customer_Address2, Customer_City, Customer_State, Customer_Zip, Customer_Password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

      
        $stmt->bind_param("ssssssssss", $firstName, $lastName, $email, $phone, $address, $address2, $city, $state, $zip, $hashedPassword);

       
        if ($stmt->execute()) {
            
            header("Location: success-create-customer-login.php");
            exit;
        } else {
          
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Database connection failed.";
    }
} else {
    echo "Invalid request method.";
}
?>

