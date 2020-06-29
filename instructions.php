<?php
require 'lib/game.inc.php';
$view = new Game\GameView($game);
$view->setTitle("Instructions");
?>

<!DOCTYPE html>
<html lang="en">
<?php echo $view->head() ?>
<body id="instructions_php">

<header>
    <h1>Who Murdered My Grade</h1>
</header>
<div>
    <p>Who Murdered my Grade is a game for two to six players. The game is played on a single computer. </p>
    <p> Upon beginning the game, you will be presented with a screen similar to this: </p>
    <figure class="border"><img src="img/selectplayer.png" alt="The character select screen"></figure>
    <p>This is like selecting tokens in a game. If you have two players, they select two suspects, say Prof. Owen and Prof. Plum. One player will play as Owen and the other as Plum. </p>
    <p>There are 21 cards: 6 suspect cards, 6 weapon cards, and 9 location cards. The system selects one of each as the murderer, weapon, and location. The remaining cards are dealt to the players, with a maximum of 6 cards per player. If there are two players, each player gets 6 cards and the computer holds 6. </p>
    <p>The following page will present the cards for the first player. When displayed, the page will not actually show any cards, but will instead look like something like this:</p>
    <figure class="border"><img src="img/cards-for-owen.png" alt="the cards the Owen player possesses"></figure>
    <p>The person playing as Prof. Owen clicks Print and the system prints the cards for that player. It should look something like this:</p>
        <div class="full">
            <figure class="full"><a href="img/cards_small.jpg" target="_blank"></a></figure>
        </div>
    <p>The top cards are the ones that have been dealt to this player. The other cards are the secret cards, the ones held by other players, and any held by the computer. Each of these cards is assigned a word.  The words are different for each player. The player keeps their printed card sheet secret. The computer will use your code word to communicate a card to you in response to a suggestion.</p>
    <p>The process repeats for each player. Each player prints their cards sheet.</p>
    <p>Then the game board is presented:</p>
    <figure class="full border"><img src="img/play1.jpg" alt="The game board"/></figure>
    <p>It is Prof. Owen's turn. Two dice has been rolled and are showing a 7. The Prof. Owen playing piece is in the board location labeled &quot;Start Prof. Owen.&quot; Prof has two options at that point:</p>
    <p>The piece can be moved exactly 7 squares. The rules for movement are that a path must only move horizontally or vertically from each square.</p>
    <ul>
        <li>You cannot move diagonally.</li>
        <li>You cannot move through the same square more than once in a turn.</li>
        <li>You cannot land or move through a square occupied by another piece.</li>
    </ul>
    <p> An exact count is not required to move into a room and special rules apply for moving into and out of a room. The game indicates all possible places the piece can be moved. They are highlighed green in the game. Clicking on any of these squares moves the piece to that square.</p>
    <div class="cl-toggle">
        <p><a>Why are four squares highlighted?</a></p>
        <div class="cl-toggleblock">
            <p>The piece can be moved to any location that can be reached in exactly 7 steps. Here are ways that can be accomplished for these squares:</p>
            <figure><img src="img/moves.jpg" alt="Possible moves" width="792" height="308"/></figure>

        </div></div>
    <p>Now it is Prof. Plum's move:</p>
    <figure class="full"><img src="img/play2.png" alt="Prof. Plum's move" width="1000" height="1000"/></figure>
    <p>Not only does that 10 yield a large number of possible moves, it can reach the Engineering Building. Pieces can only enter a room though the openings, as seen on the game board. An exact count is not required to enter a room. By clicking in the Engineering Building, Prof. Plum moves into the building:</p>
    <figure><img src="img/play3.png" alt="Prof Plum in engineering building" width="589" height="621"/></figure>
    <p>Once a player enters a room, they have three choices:</p>
    <ul>
        <li>Pass, ending the turn.</li>
        <li>Make a suggestion.</li>
        <li>Make an accusation.</li>
    </ul>
    <p>Making a suggestion and an accusation are the same process, just  different outcomes. If Prof Plum chooses to make a suggestion, he is presented with the possible suspects:</p>
    <figure><img src="img/suspects.jpg" alt="The Suspects for the crime"></figure>
    <p>Select one suspect. Suppose Prof. Plum selects Prof. McCullen and clicks Go. This is saying &quot;I think the murderer was Prof. McCullen&quot;. This is what happens:</p>
    <figure><img src="img/weapon.png" alt=""/></figure>
    <p>The suspect is moved into the room. In this case Prof. McCullen's piece is moved into the Engineering Building. It does not matter if someone is playing Prof. McCullen or not. The piece is moved. Then the player must choose a weapon from the six possible options. Suppose he chooses <strong>Project</strong>. Prof. Plum has just made an accusation that Prof. McMullen did it in the Engineering Building (the building they are in) using the Project. Here is how the computer replies:</p>
    <figure><img src="img/word.png" alt=""/></figure>
    <p>The Prof. Plum player looks at their sheet. They see the word 'blowhole' is under the card for Engineering Building. That player now knows that the crime could not have taken place in the Engineering building.</p>
    <div class="cl-toggle">
        <p><a>Why the words?</a></p>
        <div class="cl-toggleblock">
            <p>If the computer said "Engineering Building", all of the players would now have that information. The player who made the suggestion would have no advantage. By passing a code word to the Prof. Plum player, the computer conveys this information to only that player. Yes, other players may figure out that 'blowhole' means Engineering Building, but that would just be part of the strategy of solving the game.</p>

        </div></div>
    <p>The word that is shown is for some one of the three parts of the suggestion that are being held by another player or the computer and are not part of the secret. If no such card exists, the system says &quot;I got nothing&quot;. Note that this does not imply that the player has found the secret! It could be that Prof. Plum is holding the Project and/or Prof. McCullen cards. Of course, other players have no way of knowing that.</p>
    <p>When Go is clicked, we move to the next player's turn.</p>
    <p>An accusation gets one of two responses: if the player got the accusation right, the player wins and the game is over. If the player got it wrong, that player continues to play, but can no longer make accusations, only suggestions! Effectively, that player has lost.</p>
    <h3>Special Rules when in Rooms</h3>
    <p>When a player is in a room, they can do any of these options when the die is thrown and it is their turn:</p>
    <p>They can exit (one step) and move to a new square or another room.</p>
    <p>They can stay in the room they are in by clicking on the room. </p>
    <p>There are secret passages on the board. If the player is in the Wharton Center, there is a secret passage to Beaumont Tower. The player can click on Beaumont tower to jump directly to it. </p>
    <p>Multiple players can be in a room. </p>
    <p>Staying in a room is just like entering the room. The player can make another suggestion or accusation.</p>
</div>

</body>
</html>