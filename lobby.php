<?php
/**
 * author: andres
 * 4/1/20
 * CSE 477 Spring 2020
 */

use Game\Games;
use Game\User;

require __DIR__ . '/lib/game.inc.php';
$view = new Game\LobbyView($site);
$view->setTitle("Lobby");
$games = new Games($site);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $view->head(); ?>
</head>

<body class="index_php">
<div class="case">
    
    <?php
        // delete all games that the logged in player may have been a a part of
        if(isset($_SESSION[User::SESSION_NAME])){
            $player = $_SESSION[User::SESSION_NAME];

            if($player != null){
                $gameid = $_SESSION[User::SESSION_NAME]->getGameid();
                $games->deleteGame($gameid);
            }
        }

    echo $view->header();
    echo $view->present();
    ?>

</div>

</body>
</html>
