<h1>Products Grouped by Category and Price</h1>
<div class="container">

<?php
// Initialize an empty array to hold categories and their products by range
$categories = [];

// Loop through all products and organize by category and price range
while ($product = $products->fetch_assoc()) {
    $categories[$product['Category_Name']][$product['Price_Range']][] = $product;
}

// Loop through each category
foreach ($categories as $categoryName => $priceRanges) {
    echo "<h2>{$categoryName}</h2>"; // Display the category name

    // Loop through each price range within the current category
    foreach ($priceRanges as $priceRange => $productsInRange) {
        echo "<h3>{$priceRange}</h3>"; // Display the price range as the subsection
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
                        <td><a href='product.php?product_id={$product['Product_ID']}'>{$product['Product_Name']}</a></td>
                        <td>\${$product['Product_Price']}</td>
                      </tr>";
            }
        } else {
            // If no products exist in the range, display a placeholder
            echo '<tr><td colspan="3">No products available</td></tr>';
        }

        echo '</tbody></table></div>'; // Close table and responsive div
    }
}
?>

</div>
