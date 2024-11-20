<?php
Require_Once("util-db.php");
  Require_Once("model-productsortprice.php");
$pageTitle = "PRODUCT By Price";
include "view-header.php";
$products = selectProduct();
include "view-product.php";
include "view-footer.php";
?>
