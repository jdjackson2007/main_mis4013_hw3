<?php
function selectEmployee() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Employee_ID, Employee_FirstName,Employee_LastName,Employee_Email,Employee_Phone,Employee_HireDate,Employee_JobTitle FROM `mis-4013_hw3`.employee_table");
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
