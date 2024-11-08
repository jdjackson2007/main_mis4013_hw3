<?php
require_once("util-db.php");
require_once("model-category.php");
$pageTitle = "CUSTOMER";
include "view-header.php";
$customers = selectCustomer();
include "view-customer.php";
include "view-footer.php";
?>
