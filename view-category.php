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
     
  </table>
      <tbody>
<?php while ($category - $category->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $category ['Category_ID'];?></td>
   <td><?php echo $category ['Category_Name'];?></td>
   <td><?php echo $category ['Category_Description'];?></td>
   <td><?php echo $category ['Category_IsActive'];?></td>
    
  </tr>
  <?php
}
?>
      </tbody>
</div>