<?php

require('Card.php');
require('Deck.php');
require('Player.php');
require('Dealer.php');

$game = new Dealer(5);
$game->addPlayer('Bob')->addPlayer('Cindy')->addPlayer('Max')->addPlayer('Zeus');
$game->deal();
$game->render();



?>