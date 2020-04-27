<?php
require 'inc/head.php';
?>
<?php
if (session_destroy()) {
    header('Location: index.php');
}
?>

<?php require 'inc/foot.php'; ?>
