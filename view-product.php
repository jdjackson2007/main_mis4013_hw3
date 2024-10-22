<h1>Product</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>IsActive</th>
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
    <td><?php echo $product ['Product_Price'];?></td
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
