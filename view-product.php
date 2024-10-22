<h1>Product</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Product ID</th>
        <th>Category ID</th>
      <th>Vendor Product ID</th>
        <th>Product Name</th>
      <th>Product Description</th>
      <th>Product Quanity</th>
        <th>Product Price</th>
      </tr>
     
 
      <tbody>
<?php while ($product = $products->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $product ['Product_ID'];?></td>
   <td><?php echo $product ['Category_ID'];?></td>
   <td><?php echo $product ['VendorProduct_ID'];?></td>
   <td><?php echo $product ['Product_Name'];?></td>
   <td><?php echo $product ['Product_Description'];?></td>
   <td><?php echo $product ['Product_Quanity'];?></td>
   <td><?php echo $product ['Product_Price'];?></td>
   <td><a href= "Product-Within-Category.php?Product_Name =<?php echo $product ['Product_Name'];?>">Category</a></td>
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
