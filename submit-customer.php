<?php

require_once("util-db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture POST data
    $customerfirstname = $_POST['inputCustomerFirstName'];
    $customerlastname = $_POST['inputCustomerLastName'];
    $email = $_POST['inputEmail4'];
    $phone = $_POST['inputPhone'];
    $address = $_POST['inputAddress'];
    $address2 = $_POST['inputAddress2'];
    $city = $_POST['inputCity'];
    $state = $_POST['inputState'];
    $zip = $_POST['inputZip'];
    $password = $_POST['inputPassword4'];
    $reenterPassword = $_POST['reenterinputPassword4'];
    
    // Check if passwords match
    if ($password !== $reenterPassword) {
        echo "Passwords do not match.";
        exit;
    }
