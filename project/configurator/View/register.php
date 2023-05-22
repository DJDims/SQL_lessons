<?php
ob_start();
?>

<section class="mt-5 d-flex flex-column align-items-center">
    <form method="POST" action="register" class="w-25 form">
        <legend>Register form</legend>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="confirmpassword" class="form-label">Confirm password</label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
        </div>
        <button type="submit" class="btn btn-login" name="send">Register</button>
    </form>
</section>

<?php
$content = ob_get_clean();
include 'layout.php';
?>