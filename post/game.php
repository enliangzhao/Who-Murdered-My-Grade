<?php
/**
 * 2/27/20
 * CSE 477 Spring 2020
 */
require '../lib/game.inc.php';

$game = Game\Game::gameFromSession($_SESSION,$site);

$controller = new Game\GameController($site, $game, $_POST);
header('Location: ' . $controller->getRedirect() );



