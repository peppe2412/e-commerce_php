<?php
session_start();
$title = 'Home';

ob_start();
?>

<h1 class="text-danger">Titolo</h1>

<?php
$content = ob_get_clean();
include('../components/layout.php')
?>