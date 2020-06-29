<?php
require "../lib/game.inc.php";

$controller = new Game\LoginController($site, $_SESSION, $_POST);
header("location: " . $controller->getRedirect());
