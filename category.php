<?php
Require_Once("util_db.php");
  Require_Once("model-category.php");
$pageTitle = "CATEGORY";
include "view-header.php";
$category = selectCategory();
include "view-category.php";
include "view-footer.php";
?>
