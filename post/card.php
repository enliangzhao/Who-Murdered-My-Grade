<?php
require '../lib/game.inc.php';
$controller = new \Game\PrintCardController($site, $_POST);
$page = $controller->getRedirect();
header('Location: ' . $page);
