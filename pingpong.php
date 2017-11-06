<?php
//Creating a table tennis game. 


//1. Create Game Variables

$player1 = 0;
$player2 = 0;
$round = 0;


//2. Specify game conditions
//WIN - Player must reach a score of 11. 
//Player must be a minimum of 2 points higher than opponent.

echo "<h1>Table Tennis</h1>\n";

while (abs($player1 - $player2)<2 || ($player1 <11 && $player2 <11)) {
$round++;
echo "<h2>Round $round</h2>\n";

if (rand(0,1)) {
$player1++;
} else {
$player2++;       
}

echo "Player1 = $player1<br/>\n";
echo "Player2 = $player2<br/>\n";
}

echo "<h2>";
if ($player1 > $player2) {
echo "Congratulations Player 1!";
} else {
    
echo "Congratulations Player 2!";    
}

echo " You are the winner after $round rounds.</h2>\n"

?>