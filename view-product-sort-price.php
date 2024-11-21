<h1>Product Grouped by Price</h1>
<div class="container text-center">
    <div class="row">

<?php
// Initialize an empty array to hold products by range
$productsByRange = [];

// Loop through all products and group them by Price_Range
while ($product = $products->fetch_assoc()) {
    $productsByRange[$product['Price_Range']][] = $product;
}

// Loop through each price range and generate a column for it
foreach ($productsByRange as $priceRange => $productsInRange) {
    echo '<div class="col-md-4">'; // Adjust to "col-md-6" or "col-md-3" based on desired column width
    echo "<h2>{$priceRange}</h2>";
    echo '<div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>';

    // Loop through products in the current range
    foreach ($productsInRange as $product) {
        echo "<tr>
                <td>{$product['Product_ID']}</td>
                <td>{$product['Product_Name']}</td>
                <td>{$product['Product_Price']}</td>
              </tr>";
    }

    echo '</tbody></table></div>'; // Close table and responsive div
    echo '</div>'; // Close column div
}
?>

    </div>
</div>
