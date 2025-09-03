<?php
session_start();
$title = 'Home';

ob_start();
?>

<header class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="text-center display-1">Titolo</h1>
        </div>
    </div>
</header>

<?php
$content = ob_get_clean();
include('../components/layout.php')
?>