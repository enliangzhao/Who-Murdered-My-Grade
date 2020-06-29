<?php
require 'lib/game.inc.php';
$games = new \Game\Games($site);
$gameid = $_SESSION[\Game\User::SESSION_NAME]->getGameid();
$printingNdx = $_SESSION[\Game\User::SESSION_NAME]->getPrintingIndex();
$gamedata = $games->get($gameid)[0];
$decodedObj = json_decode($gamedata);
$game = \Game\Game::createFromDecodedObj($decodedObj);
$game->setPrintingIndex($printingNdx);
$view = new \Game\PrintCardView($game);
$view->setTitle("WMMG: Print Page");
?>
<!doctype html>
<html>

<?php echo $view->head() ?>

<body id="printCards_php">
<div class="display-only">
    <!--- cant think of a way to loop throw all the selected profs --->
    <h1><?php echo $view->presentProf() ?></h1>

    <form action="post/card.php" method="post">
        <div>
            <p>
                <input class="button-class" type="button" onclick="window.print();return false;" value="Print">
            </p>
            <p>
                <button class="button-class" name="next" type="submit" >Next</button>
            </p>
        </div>
    </form>
    <?php
    // uncomment this line to enable cheat mode.
    //$game->enableCheatMode();
    if($game->getCheatMode()){
        echo $view->presentSecretCards();
    }
    ?>
</div>

<div class="card-display">
    <h1 class="text-center"> <?php echo $view->presentProf() ?> </h1>
    <h2 class="text-center">Held Cards</h2>
    <div><?php echo $view->presentCards() ?></div>
    <h2 class="text-center">Other Cards</h2>
    <div><?php echo $view->presentOther() ?></div>
</div>
</body>
</html>
