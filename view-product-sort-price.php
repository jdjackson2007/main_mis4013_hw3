<h1>Product Grouped by Price</h1>
<div class="container text-center">
    <div class="row">

<?php
// Initialize an empty array to hold products by range
$productsByRange = [
    'Under 50' => [],
    'Under 100' => [],
    'Under 500' => [],
    'Under 1000' => [],
    'Under 2500' => [],
    'Under 5000' => [],
    '5000 and Above' => [],
];

// Loop through all products and group them by Price_Range
while ($product = $products->fetch_assoc()) {
    $productsByRange[$product['Price_Range']][] = $product;
}

// Loop through each price range and generate a column for it
foreach ($productsByRange as $priceRange => $productsInRange) {
    echo '<div class="col-md-4 mb-4">'; // Adjust column size and margin as needed
    echo "<h2>{$priceRange}</h2>";
    echo '<div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>';

    // Check if there are products in the current range
    if (!empty($productsInRange)) {
        // Loop through products in the current range
        foreach ($productsInRange as $product) {
            echo "<tr>
                    <td>{$product['Product_ID']}</td>
                    <td>{$product['Product_Name']}</td>
                    <td>{$product['Product_Price']}</td>
                  </tr>";
        }
    } else {
        // If no products exist in the range, display a placeholder
        echo '<tr><td colspan="3">No products available</td></tr>';
    }

    echo '</tbody></table></div>'; // Close table and responsive div
    echo '</div>'; // Close column div
}
?>

    </div>
</div>
