<?php
$pageTitle = "Account Created Successfully";
include "view-header.php";
?>
  <div class="container">
                <h1>Account Created Successfully!</h1>
                <p>Thank you for creating an account. You can now log in and start using your account.</p>
                <p>If you encounter any issues, please contact our support team.</p>
                <a href="login.php" class="btn btn-primary">Log In</a>
                <a href="index.php" class="btn btn-secondary">Go to Home</a>
            </div>

<?php include "view-footer.php"; ?>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Log In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="POST" class="row g-3">
                    <div class="col-12">
                        <label for="loginEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
                    </div>
                    <div class="col-12">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

