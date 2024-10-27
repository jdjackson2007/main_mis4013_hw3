<h1>Employee</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Employee ID</th>
        <th>Employee First Name</th>
      <th>Vendor Employee Last Name</th>
        <th>Employee Email</th>
      <th>Employee Phone</th>
      <th>Employee Hire Date</th>
        <th>Employee Job Title</th>
      </tr>
     
 
      <tbody>
<?php while ($employee = $employees->fetch_assoc()) {

  ?>
  <tr>
   <td><?php echo $employee ['Employee_ID'];?></td>
   <td><?php echo $employee ['Employee_FirstName'];?></td>
   <td><?php echo $employee ['Employee_LastName'];?></td>
   <td><?php echo $employee ['Employee_Email'];?></td>
   <td><?php echo $employee ['Employee_Phone'];?></td>
   <td><?php echo $employee ['Employee_HireDate'];?></td>
   <td><?php echo $employee ['Employee_JobTitle'];?></td>
  
    
  </tr>
  <?php
}
?>
      </tbody>
     </table>
</div>
