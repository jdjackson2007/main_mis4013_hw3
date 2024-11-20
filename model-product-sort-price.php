<?php
function selectProduct($pprice) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Product_ID,Category_ID,Product_Name,Product_Description,Product_Price FROM `mis-4013_hw3`.product_table WHERE Product_Price=?");
         $stmt->bind_param("d", $pprice);
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
