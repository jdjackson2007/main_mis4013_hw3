<?php
Require_Once("util-db.php");
Require_Once("model-product-sort-price.php");
$pageTitle = "PRODUCT-SORT-PRICE";
include "view-header.php";
$products = selectproduct($_GET['price']);
include "view-product-sort-price.php";
include "view-footer.php";
?>
