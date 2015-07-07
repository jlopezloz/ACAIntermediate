<?php

class Dealer
{

    protected $players;

    protected $numCardsPerPlayer;


    public function __construct($numCardsPerPlayer)
    {
        $this->numCardsPerPlayer = $numCardsPerPlayer;
        $this->deck = new Deck();
        $this->deck->shuffle();

    }

    public function addPlayer($playerName)
    {
        $this->players[] = new Person($playerName);

        return $this;
    }

    public function deal()
    {
        foreach($this->players as $player){
            $cards = $this->deck->getSpecifiedNumberOfCards($this->numCardsPerPlayer);
            foreach($cards as $card){
                $player->giveCard($card);
            }
        }
    }

    public function render()
    {
        foreach($this->players as $player){
            echo '<h3>' . $player->getName() . '</h3>';
            $hands = $player->getHand();
            foreach($hands as $card){
                echo $card->render();
            }

            echo '<hr/>';
        }
    }

    public function getPlayersAndTheirHands()
    {
        return $this->players;
    }
}
?>