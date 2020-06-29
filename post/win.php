<?php

require '../lib/game.inc.php';

$game = Game\Game::gameFromSession($_SESSION,$site);

$games = new Games($site);
$players = new Players($site);
$users = new Users($site);

$user = $_SESSION[User::SESSION_NAME];

$userid = $user->getId();
$gameid = $_SESSION[User::SESSION_NAME]->getGameid();
$playerid = $users->getPlayerId($userid);

$players->remove($userid);
$games->deleteGame($gameid);
$games->deletePlayerGame($gameid);
unset($_SESSION[User::SESSION_NAME]);


header('Location: ' . $controller->getRedirect() );