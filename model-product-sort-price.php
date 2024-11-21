<?php
function selectProductByPriceRange() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("
            SELECT 
                Product_ID, 
                Category_ID, 
                VendorProduct_ID, 
                Product_Name, 
                Product_Description, 
                Product_Quanity, 
                Product_Price,
                CASE
                    WHEN Product_Price <= 50 THEN 'Under 50'
                    WHEN Product_Price BETWEEN 51 AND 99 THEN 'Under 100'
                    WHEN Product_Price BETWEEN 100 AND 499 THEN 'Under 500'
                    WHEN Product_Price BETWEEN 500 AND 999 THEN 'Under 1000'
                    WHEN Product_Price BETWEEN 1000 AND 2499 THEN 'Under 2500'
                    WHEN Product_Price BETWEEN 2500 AND 4999 THEN 'Under 5000'
                    ELSE '5000 and Above'
                END AS Price_Range
            FROM `mis-4013_hw3`.product_table
            ORDER BY 
                FIELD(Price_Range, 
                    'Under 50', '51 to 99', '100 to 499', 
                    '500 to 999', '1000 to 2499', 
                    '2500 to 4999', '5000 and Above'
                ), 
                Product_Price ASC
        ");
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
