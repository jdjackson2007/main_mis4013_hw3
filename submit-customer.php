<?php

require_once("util-db.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = $_POST['inputEmail4'];
    $password = $_POST['inputPassword4'];
    $reenterPassword = $_POST['reenterinputPassword4'];
    $address = $_POST['inputAddress'];
    $address2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];
    
    
    if ($password !== $reenterPassword) {
        echo "Passwords do not match.";
        exit;
    }

   
    $conn = get_db_connection();
    
    if ($conn) {
       
        $stmt = $conn->prepare("INSERT INTO customers (email, password, address, address2, city, state, zip) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
       
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        
        $stmt->bind_param("sssssss", $email, $hashedPassword, $address, $address2, $city, $state, $zip);

        if ($stmt->execute()) {
            echo "Account created successfully!";
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
