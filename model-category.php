<?php
function selectCategory() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Category_ID,Category_Name,Category_Description,Category_IsActive FROM `mis-4013_hw3`.category_table");
        $stmt->bind_param();
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
