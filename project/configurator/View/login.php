<?php
ob_start();
?>

<section class="mt-5 d-flex flex-column align-items-center">
    <form method="POST" action="register" class="w-25 form">
        <legend>Login form</legend>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-login w-25">Login</button>
    </form>
</section>

<?php
$content = ob_get_clean();
include 'layout.php';
?>