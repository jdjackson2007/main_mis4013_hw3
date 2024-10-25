<?php
Require_Once("util-db.php");
  Require_Once("model-product-within-category.php");
$pageTitle = "PRODUCT-WITHIN-CATEGORY";
include "view-header.php";
$categoriess = selectProductWithinCategory($_Get['Category_Name']);
include "view-product-within-category.php";
include "view-footer.php";
?>
