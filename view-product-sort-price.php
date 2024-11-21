<h1>Product Grouped by Price</h1>
<div class="product-groups">

<?php 
$currentRange = null;
while ($product = $products->fetch_assoc()) {
    // Check if we're starting a new range
    if ($currentRange !== $product['Price_Range']) {
        // Close the previous table if it exists
        if ($currentRange !== null) {
            echo '</tbody></table></div>';
        }
        
        // Start a new table for the new range
        $currentRange = $product['Price_Range'];
        echo "<h2>Price Range: {$currentRange}</h2>";
        echo '<div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Category ID</th>
                      <th>Product Name</th>
                      <th>Product Description</th>
                      <th>Product Quantity</th>
                      <th>Product Price</th>
                    </tr>
                  </thead>
                  <tbody>';
    }

    // Add the current product to the table
    echo "<tr>
            <td>{$product['Product_ID']}</td>
            <td>{$product['Category_ID']}</td>
            <td>{$product['Product_Name']}</td>
            <td>{$product['Product_Description']}</td>
            <td>{$product['Product_Quanity']}</td>
            <td>{$product['Product_Price']}</td>
          </tr>";
}

// Close the last table
if ($currentRange !== null) {
    echo '</tbody></table></div>';
}
?>
</div>
