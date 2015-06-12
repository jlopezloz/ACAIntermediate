<?php

/**
 * Return an array that represents a deck of cards
 *
 * e.g. array(
 *  0 => '1D', // Ace of diamonds
 *  1 => '2D', // 2 of diamonds
 *  ...
 *  11 => '11C' // Jack of clubs
 * )
 *
 * @return array
 */
function getDeck(){
$deck = [];	
$suits = [
'Diamond' => '&diams;',
'Heart' => '&hearts;',
'Club' => '&clubs;',
'Spade' => '&spades;',
];
$rank = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];	

foreach ($suits as $suit => $color) {

	foreach ($rank as $indiv) {
		$deck[] = colorizeCard($suit, $color, $indiv);
		// $deck[] = $indiv . "-" . $suit;
	}
}
return $deck;
}

/*
$deck = getDeck();
echo 'Number of cards in the deck: ' . count($deck) . '</br>';
echo '<pre>';
print_r($deck);
*/


/**
 * Shuffle the deck of cards
 *
 * @param array $deck Full deck of cards (passed by ref)
 *
 * @return void
 */
function shuffleDeck(&$deck){
	$keys = array_keys($deck);
	shuffle($keys);	
	foreach ($keys as $key) {
		$new[$key] = $deck[$key];
	}
	 $deck = $new;
	 return $deck;
}

/*
$shuffledDeck = shuffleDeck($deck);
echo 'Number of cards in the deck: ' . count($shuffledDeck) . '</br>';
echo '<pre>';
print_r($shuffledDeck);	
die();
*/

/**
 * @param array $players      An array of player names
 * @param int   $numCards     How many cards to give each player
 * @param array $shuffledDeck A shuffled deck of cards
 *
 * @return array
 */


$numCards = 5;
$playerhands = [];

// function deal($players, $numCards, &$shuffledDeck)
// {
// 	foreach($players as $player)
// 	{ 
// 		$cardsdealt[] = ['4','5','6']; 				//$shuffledDeck;
// 		$playerhands[$player] = $cardsdealt; 

// 	}
// // $shuffledDeck = $new_shuffled;
// return $playerhands;
// }

function deal($players, $numCards, &$shuffledDeck){
	foreach ($players as $player) {
		$new_shuffled = array_splice($shuffledDeck, $numCards);
		$cardsfromdeck = $shuffledDeck;   //['5','5','5'];
		$playerhands[$player] = $cardsfromdeck;
		$shuffledDeck = $new_shuffled;
	}
return $playerhands;	
}

function colorizeCard($suit, $htmlSuite, $rank)
{
    $color = ($suit == 'Diamond' || $suit == 'Heart') ? 'red' : 'black';
    return "<div style=\"font-size: 1em; color:$color;\">$rank$htmlSuite</div>";
}


//$playerhands = deal($players, $numCards, $shuffledDeck);




// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();

// Shuffle the deck
shuffleDeck($deck);

echo 'There are '. count($deck) .' cards in the deck after shuffling, but before dealing: <br/>';
//print_r($deck);
foreach ($deck as $card) {
	echo $card . '<br/>';
}



$players = array('Yizus', 'Jesus', 'Hey Zeus', 'Hey Seuss');
$numCards = 5;

$playerHands = deal($players, $numCards, $deck);

echo '<h2>Hands each player has:</h2>';
// print_r($playerHands);
foreach ($playerHands as $player => $hand) {
	echo "<h3>$player:</h3>";
	$foo = $numCards;
	while ($foo != 0){
		$foo--;
		echo $hand[$foo];
	}
	echo '</br>';
}
echo '</br>';
echo 'Now there are ' .count($deck) . ' cards in the deck after dealing: <br/>';
// print_r($deck);
foreach ($deck as $card) {
	echo $card . '<br/>';
}




