<?php

require 'lib/game.inc.php';


$game = Game\Game::gameFromSession($_SESSION, $site);
$root = $site->getRoot();

if($game->getWinner() != null){
    $redirect = "$root/win.php?loser=1";
    header("location: " . $redirect);
    exit;
}

$gameView = new Game\GameView($site, $game);
$gameView->setTitle("WMMG: Game");
?>

<!DOCTYPE html>
<html lang="en">
<?php echo $gameView->head() ?>

<body id="game_php">
<?php echo $gameView->presentGame();?>
<?php
echo $gameView->socketKey();
?>
</body>
</html>