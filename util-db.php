<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli("justinjacksonmis4013hw3.mysql.database.azure.com"
, "justinjacksonmis", "DougDoug07&&", "mis-4013_hw3");
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
