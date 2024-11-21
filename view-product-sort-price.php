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

// Predefined order of ranges for layout
$priceRangesOrder = [
    'Under 50',
    'Under 100',
    'Under 500',
    'Under 1000',
    'Under 2500',
    'Under 5000',
    '5000 and Above'
];

// Loop through each predefined price range and generate a column
foreach ($priceRangesOrder as $priceRange) {
    echo '<div class="col-md-4 mb-4">'; // Adjust column size and
