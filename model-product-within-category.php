<?php
function selectProductWithinCategory($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select * from product_table where Category_ID=?");
         $stmt->bind_param("c", $cid);
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
