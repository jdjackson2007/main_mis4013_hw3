<?php
Require_Once("util-db.php");
  Require_Once("model-product-within-category.php");
$pageTitle = "PRODUCT-WITHIN-CATEGORY";
include "view-header.php";
$products = selectProductWithinCategory($_GET['id']);
include "view-product-within-category.php";
include "view-footer.php";
?>
