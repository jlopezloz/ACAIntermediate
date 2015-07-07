<?php
class Deck
{
    protected $cards = [];

    protected $suites = array('D', 'H', 'S', 'C');

    protected $ranks = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K');

    public function __construct()
    {
        $this->createDeck();
    }

    public function createDeck()
    {
        foreach ($this->suites as $suite){

            foreach ($this->ranks as $rank){
                $this->cards[] = new Card($rank, $suite);
            }
        }
    }

    public function getCards()
    {
        return $this->cards;
    }

    public function shuffle()
    {
        shuffle($this->cards);
    }

    public function getCard()
    {
        $this->shuffle();

        $card = array_pop($this->cards);

        if (empty($card)) {
            throw new \Exception('I ran out of cards!');
        }
        return $card;
    }

    public function getSpecifiedNumberOfCards($numCards)
    {
        $cards = [];
        for($i = 0; $i < $numCards; $i++){
            $cards[] = $this->getCard();
        }

        return $cards;

    }

    public function getNumCards()
    {
        return count($this->cards);
    }


}
?>