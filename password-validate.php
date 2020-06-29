<?php
$open = true;
require 'lib/game.inc.php';
$view = new Game\PasswordValidateView($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $view->head(); ?>

<body>
<div class="password_php">
    <?php
    echo $view->header();
    echo $view->present();
    ?>
</div>

</body>
</html>