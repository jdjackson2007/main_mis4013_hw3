<?php
function selectProductWithinCategory($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM product_table WHERE Category_ID=?");
         $stmt->bind_param("i", $cid);
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
