<h1>Products Grouped by Price</h1>
<div class="container">

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

// Loop through each price range and generate a section for it
foreach ($productsByRange as $priceRange => $productsInRange) {
    echo "<h2>{$priceRange}</h2>"; // Display the price range as the section title
    echo '<div class="table-responsive mb-4">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product</th>
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
                    <td><a href='category.php?category_id={$product['Product_ID']}'>{$product['Product_Name']}</a></td>
                    <td>\${$product['Product_Price']}</td>
                  </tr>";
        }
    } else {
        // If no products exist in the range, display a placeholder
        echo '<tr><td colspan="3">No products available</td></tr>';
    }

    echo '</tbody></table></div>'; // Close table and responsive div
}
?>

</div>
