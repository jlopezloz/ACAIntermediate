<?php

class Window
{
    protected $slideType;

    public function __construct($slideType)
    {
        $this->slideType  = $slideType;
    }
}

class Door
{
    protected $material;

    public function __construct($material)
    {
        $this->material = $material;
    }

}

class Floor
{
    protected $material;

    public function __construct($material)
    {
        $this->material = $material;
    }
}


class House
{
    protected $window;

    protected $door;

    protected $floor;

    //THIS IS BAD AND ITS GOING TO BE SHOWN WHY
    public function __construct()
    {
        $this->window = new Window('left slidey window');
        $this->door = new Door('old skool wooden door');
        $this->floor = new Floor('baroque hardwood');
    }

}
//ONLY WAY TO CHANGE THE TYPE OF FLOOR OR WINDOW OR DOOR IS TO EXTEND A CLASS
//IT IS REAAALLY NOT FEASABLE BECASUE YOU WOULD HAVE N NUMBER AMOUNT OF CLASSES


$house = new House();
echo '<pre>';
print_r($house);

?>