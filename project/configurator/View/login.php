<?php
ob_start();
?>

<section class="mt-5 d-flex flex-column align-items-center">
    <form method="POST" action="login" class="w-25 form">
        <legend>Login form</legend>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-login" name="send">Login</button>
    </form>
</section>

<?php
$content = ob_get_clean();
include 'layout.php';
?>