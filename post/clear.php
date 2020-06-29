<?php
/**
 * author: andres
 * 4/18/20
 * CSE 477 Spring 2020
 */

require '../lib/game.inc.php';

$controller = new Game\LobbyController($site, $_POST, $_SESSION);
header('Location: ' . $controller->getRedirect());