<?php

/**
 * Class Card represents a single playing card
 */
class Card
{
    /**
     * Allowed suite characters
     * @var array
     */
    private $allowedSuites = array('D', 'H', 'S', 'C');

    /**
     * Suite of card
     * e.g D, H, S, C
     *
     * @var string
     */
    protected $suite;

    /**
     * Rank of card
     * e.g. A, 2, 3..... J, K Q
     *
     * @var string
     */
    protected $rank;

    /**
     * Color of this card, depending on the suite
     * Spades and Clubs are black while Hearts and Diamonds are red
     * @var string
     */
    protected $color;

    /**
     * HTML entity iconic representation of this suite
     * @var string
     */
    protected $icon;

    /**
     * @param string $rank Rank of this card
     * @param string $suite Single character suite of this card
     * @throws Exception
     */
    public function __construct($rank, $suite)
    {
        // Ensure that the suite the client passed in is a valid one
        if (!in_array($suite, $this->allowedSuites)) {
            throw new Exception('Cannot create a card because suite, ' . $suite . ', is invalid!');
        }

        // Assign them to the local object properties
        $this->rank = $rank;
        $this->suite = $suite;

        // Color this card
        $this->assignColor();

        // Give it an icon
        $this->assignIcon();
    }

    /**
     * Get an HTML rendering for this card
     * @return string
     */
    public function render()
    {
        return '<span style ="color:'
        . $this->color
        . ';">'
        . $this->rank
        . $this->icon
        . '</span>';

    }

    /**
     * Assign the appropriate color to this card
     * @return void
     */
    protected function assignColor()   //three options; the last one is the shorter one.
    {
        if($this->suite == 'D' || $this->suite == 'H'){
            $this->color = 'red';
        }else{
            $this->color = 'black';
        }

        if(in_array($this->suite, array('D','H'))) {
            $this->color = 'red';
        }else{
            $this->color = 'black';
        }

        $this->color = in_array($this->suite, array('D', 'H')) ? "Red" : "Black";

    }

    /**
     * Assign the appropriate HTML entity icon to this card
     * @return void
     */
    protected function assignIcon()
    {
        switch($this->suite){
            case 'D':
                $this->icon = '&diams;';
                break;
            case 'H':
                $this->icon = '&hearts;';
                break;
            case 'S':
                $this->icon = '&spades;';
                break;
            case 'C':
                $this->icon = '&clubs;';
                break;
            default:
                //this will never get hit because the exception is already thrown.
        }
    }
}


















#We used this to see if the cards were being created
//$card = new Card(10, 'D');
//echo $card->render() . '<br/>';
//
//$card = new Card(9, 'S');
//echo $card->render() . '<br/>';
//
//$card = new Card(5, 'C');
//echo $card->render() . '<br/>';
//
//$card = new Card('A', 'H');
//echo $card->render() . '<br/>';


//echo '<pre>';
//$deck = new Deck();
//
//echo 'Num cards in pristine deck:' . $deck->getNumCards() . '<br/>';
//
//echo $deck->getCard()->render() . '<br/>';   //use of chain.
//$card2 = $deck->getCard();
//echo $card2->render() . '<br/>';
//echo $deck->getCard()->render() . '<br/>';
//
//echo '<br/>';
//echo'Num cards after dealing a few: ' . $deck->getNumCards();


# We used this to check if the shuffling worked.
//$cards = $deck->getCards();
//
//echo 'This is my deck before shuffling ';
//foreach ($cards as $card){
//    echo $card->render() . ' ';
//}
//echo '<br/>';
//
//$deck->shuffle();
//
//$cards = $deck->getCards();
//
//echo 'This is my deck after shuffling ';
//foreach ($cards as $card){
//    echo $card->render() . ' ';
//}
