<?php
function insertCustomer() {
    try {
        $conn = get_db_connection($CustFirst,$CustLast,$CustEmail,$CustPhone,$CustAddress,$CustAddress2,$CustCity,$CustState,$CustZip,$CustPass);
        $stmt = $conn->prepare("INSERT INTO `mis-4013_hw3`.customer_table' ('Customer_FirstName','Customer_LastName','Customer_Email','Customer_Phone','Customer_Address','Customer_Address2','Customer_City','Customer_State','Customer_Zip','Customer_Password') Values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss", $CustFirst,$CustLast,$CustEmail,$CustPhone,$CustAddress,$CustAddress2,$CustCity,$CustState,$CustZip,$CustPass);
        $Success = $stmt->execute();
        $conn->close();
        return $Success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
<?php
$pageTitle = "Account Created Successfully";
include "view-header.php";
?>
  <div class="container">
                <h1>Account Created Successfully!</h1>
                <p>Thank you for creating an account. You can now log in and start using your account.</p>
                <p>If you encounter any issues, please contact our support team.</p>
                <a href="login.php" class="btn btn-primary">Log In</a>
                <a href="index.php" class="btn btn-secondary">Go to Home</a>
            </div>
<?php include "view-footer.php"; ?>

