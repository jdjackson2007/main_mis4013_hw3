<?php
Require_Once("util-db.php");
  Require_Once("model-product-sort-price.php");
$pageTitle = "PRODUCTS GROUPED BY PRICE";
include "view-header.php";
$products = selectProductByPriceRange();
include "view-product-sort-product.php";
include "view-footer.php";
?>
