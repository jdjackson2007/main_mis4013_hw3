<?php
function selectCategory() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Product_ID, Category_ID, VendorProduct_ID, Product_Name varchar, Product_Description, Product_Quanity, Product_Price, `mis-4013_hw3`.product_table");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
