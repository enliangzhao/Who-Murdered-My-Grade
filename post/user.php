<?php
$open = true;

require "../lib/game.inc.php";
$controller = new Game\UserController($site,$_POST);
//$redirect = $controller->getRedirect();
//echo "<a href='$redirect'>redirect</a>";
header("location: " . $controller->getRedirect());