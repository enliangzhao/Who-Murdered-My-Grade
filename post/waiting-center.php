<?php

require '../lib/game.inc.php';

$controller = new \Game\WaitingController($site, $_SESSION);
//var_dump($_SESSION[User::SESSION_NAME]->getId()+1);
$page = $controller->getRedirect();
header('Location: ' . $page);

