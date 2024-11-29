<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>HomeWork4</h1>
    <a href="category.php">CATEGORY</a>
    <a href="product.php">PRODUCT</a>
    <a href="employee.php">EMPLOYEE</a>

    
    <?php
    include "create-customer-login.php";
    include "customer-login.php"; 
    ?>

   
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
        Log In
    </button>
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#createAccountModal">
        Create Account
    </button>
           
<?php
include "view-footer.php";
?>
