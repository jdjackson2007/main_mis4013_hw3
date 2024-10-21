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
<?php while ($category = $products->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $category ['Product_ID'];?></td>
   <td><?php echo $category ['VendorProduct_ID'];?></td>
   <td><?php echo $category ['Product_Name'];?></td>
   <td><?php echo $category ['Product_Description'];?></td>
  <td><?php echo $category ['Product_Quanity'];?></td>
    <td><?php echo $category ['Product_Price'];?></td
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
