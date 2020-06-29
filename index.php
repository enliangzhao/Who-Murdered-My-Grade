<?php
require __DIR__ . '/lib/game.inc.php';
$view = new Game\LoginView($_GET);
?>

<!doctype html>
<html lang="en">

<?php echo $view->head();?>

<body class="index_php">

<?php echo $view->present();?>

</body>

</html>

