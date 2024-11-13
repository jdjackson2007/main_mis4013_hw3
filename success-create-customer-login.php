<?php
$pageTitle = "Account Created Successfully";
include "view-header.php";
?>
<?php
$conn = get_db_connection();
if ($conn) {
    $stmt = $conn->prepare("INSERT INTO customer_table 
        (Customer_FirstName, Customer_LastName, Customer_Email, Customer_Phone, Customer_Address, Customer_Address2, Customer_City, Customer_State, Customer_Zip, Customer_Password) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssssssssss", $firstName, $lastName, $email, $phone, $address, $address2, $city, $state, $zip, $password);
        if ($stmt->execute()) {
            ?>
          
            <?php
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        $stmt->close();
    } else {
        echo "<p>Error preparing statement: " . $conn->error . "</p>";
    }
    $conn->close();
} else {
    echo "<p>Database connection failed.</p>";
}
?>
  <div class="container">
                <h1>Account Created Successfully!</h1>
                <p>Thank you for creating an account. You can now log in and start using your account.</p>
                <p>If you encounter any issues, please contact our support team.</p>
                <a href="login.php" class="btn btn-primary">Log In</a>
                <a href="index.php" class="btn btn-secondary">Go to Home</a>
            </div>
<?php include "view-footer.php"; ?>

