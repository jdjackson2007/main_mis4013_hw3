<h1>Product Grouped by Price</h1>
<div class="product-groups">

<?php
// Initialize an empty array to hold products by range
$productsByRange = [];

// Loop through all products and group them by Price_Range
while ($product = $products->fetch_assoc()) {
    $productsByRange[$product['Price_Range']][] = $product;
}

// Loop through each price range and generate a table
foreach ($productsByRange as $priceRange => $productsInRange) {
    echo "<h2>{$priceRange}</h2>";
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

    // Loop through products in the current range
    foreach ($productsInRange as $product) {
        echo "<tr>
                <td>{$product['Product_ID']}</td>
                <td>{$product['Category_ID']}</td>
                <td>{$product['Product_Name']}</td>
                <td>{$product['Product_Description']}</td>
                <td>{$product['Product_Quanity']}</td>
                <td>{$product['Product_Price']}</td>
              </tr>";
    }

    echo '</tbody></table></div>';
}
?>
</div>
