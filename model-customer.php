<?php
function selectCustomer() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT Customer_ID,Customer_FirstName,Customer_LastName,Customer_Email,Customer_Phone,Customer_Address,Customer_Address2,Customer_City,Customer_State,Customer_Zip,Customer_Password  FROM `mis-4013_hw3`.customer_table'");
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
function insertCustomer($CustFirst, $CustLast, $CustEmail, $CustPhone, $CustAddress, $CustAddress2, $CustCity, $CustState, $CustZip, $CustPass) {
    try {
        $conn = get_db_connection(); 
        $stmt = $conn->prepare("INSERT INTO `mis-4013_hw3`.customer_table
(`Customer_FirstName`, `Customer_LastName`, `Customer_Email`, `Customer_Phone`,
 `Customer_Address`, `Customer_Address2`, `Customer_City`, `Customer_State`, `Customer_Zip`, `Customer_Password`)) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "ssssssssss", 
            $CustID
            $CustFirst, 
            $CustLast, 
            $CustEmail, 
            $CustPhone, 
            $CustAddress, 
            $CustAddress2, 
            $CustCity, 
            $CustState, 
            $CustZip, 
            $CustPass
        );
        $Success = $stmt->execute();
        $stmt->close();
        $conn->close(); 
        return $Success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
