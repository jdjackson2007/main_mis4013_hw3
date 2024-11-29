<h1>Products Grouped by Category and Price</h1>
<div class="container">

<?php

if ($products->num_rows > 0) {
   
    $categories = [];

    while ($product = $products->fetch_assoc()) {
        $categories[$product['Category_Name']][$product['Price_Range']][] = $product;
    }

    foreach ($categories as $categoryName => $priceRanges) {
        echo "<h2>{$categoryName}</h2>"; 
        foreach ($priceRanges as $priceRange => $productsInRange) {
            echo "<h3>{$priceRange}</h3>"; 

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

           
            if (!empty($productsInRange)) {
               
                foreach ($productsInRange as $product) {
                    echo "<tr>
                            <td>{$product['Product_ID']}</td>
                            <td><a href='product.php?product_id={$product['Product_ID']}'>{$product['Product_Name']}</a></td>
                            <td>\${$product['Product_Price']}</td>
                          </tr>";
                }
            } else {
               
                echo '<tr><td colspan="3">No products available</td></tr>';
            }

            echo '</tbody></table></div>';
        }
    }
} else {
    echo "<p>No products available to display.</p>";
}
?>

</div>
