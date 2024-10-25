<h1>Category</h1>
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
<?php while ($category = $categories->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $category ['Category_ID'];?></td>
   <td><?php echo $category ['Category_Name'];?></td>
   <td><?php echo $category ['Category_Description'];?></td>
   <td><?php echo $category ['Category_IsActive'];?></td>
   <td><a href= "product-within-category.php?Category_Name =<?php echo $product ['Category_Name'];?>">Product</a></td>
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
