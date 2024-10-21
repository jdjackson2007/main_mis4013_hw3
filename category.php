<?php
Require_Once("util-db.php");
  Require_Once("model-category.php");
$pageTitle = "CATEGORY";
include "view-header.php";
$categories = selectCategory();
include "view-category.php";
include "view-footer.php";
?>
