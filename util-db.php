<?php
function get_db_connection() {
    // Create connection
    $conn = new mysqli(
        "mis4013project.mysql.database.azure.com", // Hostname
        "jdjackson2007",                          // Username
        "DougDoug07&&",                           // Password
        "mis-4013_Project"                        // Database name
    );

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
