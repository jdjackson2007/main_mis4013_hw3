<?php
function selectCategory() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Category_ID,Category_Name,Category_Description,Category_IsActive FROM `mis-4013_hw3`.category_table");
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
<?php
function insertCustomer() {
    try {
        $conn = get_db_connection($CustFirst,$CustLast,$CustEmail,$CustPhone,$CustAddress,$CustAddress2,$CustCity,$CustState,$CustZip,$CustPass);
        $stmt = $conn->prepare("INSERT INTO `mis-4013_hw3`.customer_table' ('Customer_FirstName','Customer_LastName','Customer_Email','Customer_Phone','Customer_Address','Customer_Address2','Customer_City','Customer_State','Customer_Zip','Customer_Password') Values(?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssss", $CustFirst,$CustLast,$CustEmail,$CustPhone,$CustAddress,$CustAddress2,$CustCity,$CustState,$CustZip,$CustPass);
        $Success = $stmt->execute();
        $conn->close();
        return $Success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
