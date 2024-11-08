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
        <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="1234 Main St" required>
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" name="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="inputCity" required>
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" name="inputState" class="form-select" required>
            <option selected>Choose...</option>
            <option value="NY">NY</option>
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
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
</form>
