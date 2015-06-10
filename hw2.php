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
$suites = ['Diamond','Heart','Club','Spade'];
$rank = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];	
#$counter = 0
foreach ($suites as $suite) {

	foreach ($rank as $indiv) {
		$deck[] = $indiv . "-" . $suite;
	}
}
return $deck;
}
$deck = getDeck();

/*echo 'Number of cards in the deck: ' . count($deck) . '</br>';
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

$shuffledDeck = shuffleDeck($deck);
/*
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
#$players = ['Yizus', 'Jesus', 'Hey Zeus', 'Hey Seuss'];

$players = array(
	'Yizus' => array(),
	'Jesus' => array(),
	'Hey Zeus' => array(),
	'Hey Seuss' => array(),
	);

$numCards = 5;

function deal($players, $numCards, &$shuffledDeck)
{

	foreach($players as $player => $cards)
	{ 
		if(count($numCards) > 0) 
		{
			$player[] =  "array_shift($shuffledDeck)";
			-- $numCards;
			return $shuffledDeck; 
		} 
	}
return $players;
}

$playerhands = deal($players, $numCards, $shuffledDeck);

echo '<pre>';
print_r($playerhands);

die();

/**
$multiarray = array(
    'Player1' => array('Card1', 'Card2', 'Card3'),
    'Player2' => array('Card1', 'Card2', 'Card3'),
    'Player3' => array('Card1', 'Card2', 'Card3'),
);
*/


// ----------- USAGE -----------------

// Crack open a brand new deck of cards
$deck = getDeck();

// Shuffle the deck
shuffleDeck($deck);

echo 'Deck after shuffling, but before dealing: <br/>';
print_r($deck);

$players = array('Joe', 'Mary', 'Zim');
$numCards = 3;

$playerHands = deal($players, $numCards, $deck);

echo 'Hands each player has: <br/>';
print_r($playerHands);

echo 'Deck after dealing: <br/>';
print_r($deck);