<?php
Require_Once("util-db.php");
  Require_Once("model-category.php");
$pageTitle = "CUSTOMER";
include "view-header.php";
$customers = selectCustomer();
include "view-customer.php";
include "view-footer.php";
?>
