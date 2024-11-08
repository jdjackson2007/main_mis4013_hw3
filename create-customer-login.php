<?php
include "create-customer-login.php";
include "customer-login.php";
?>
<form action="submit-customer.php" method="POST" class="row g-3">
    <div class="col-md-6">
        <label for="inputCustomerFirstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="inputCustomerFirstName" name="inputCustomerFirstName" required>
    </div>
    <div class="col-md-6">
        <label for="inputCustomerLastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="inputCustomerLastName" name="inputCustomerLastName" required>
    </div>
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="inputEmail4" required>
    </div>
    <div class="col-md-6">
        <label for="inputPhone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="inputPhone" name="inputPhone" required>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="inputAddress" required>
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="inputAddress2">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="inputCity" required>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" name="inputState" class="form-select" required>
            <option selected>Choose...</option>
            <option value="NY">New York</option>
            <!-- Add other options here -->
        </select>
    </div>
    <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="inputZip" required>
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="inputPassword4" required>
    </div>
    <div class="col-md-6">
        <label for="reenterinputPassword4" class="form-label">Re-enter Password</label>
        <input type="password" class="form-control" id="reenterinputPassword4" name="reenterinputPassword4" required>
    </div>
   <div class="modal fade" id="createAccountModal" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createAccountModalLabel">Create Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="submit-customer.php" method="POST" class="row g-3">
                    <!-- Form fields go here (e.g., First Name, Email, etc.) -->
                </form>
            </div>
        </div>
    </div>
</div>
</form>
