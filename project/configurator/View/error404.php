<?php
ob_start();
?>

<section class="mt-3 d-flex flex-row align-items-center justify-content-center">
    <h2>ERROR 404</h2>
</section>
<?php
$content = ob_get_clean();
include 'layout.php';
?>