<?php
class Person
{
    protected $hand = [];
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function giveCard(Card $card)
    {
        $this->hand[] = $card;
    }

    /**
     * @return array
     */
    public function getHand()
    {
        return $this->hand;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}
?>