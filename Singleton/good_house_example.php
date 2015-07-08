<?php

class Window
{
    protected $slideType;

    public function __construct($slideType)
    {
        $this->slideType  = $slideType;
    }

    //This is a way to do it for echo
    public function toString()
    {
        return $this->slideType;
    }

    //or you can do this  WHICH IS PREFFERED
    public function render()
    {
        return $this->slideType;
    }


}

class Door
{
    protected $material;

    public function __construct($material)
    {
        $this->material = $material;
    }

    public function render()
    {
        return $this->material;
    }

}

class Floor
{
    protected $material;

    public function __construct($material)
    {
        $this->material = $material;
    }

    public function render()
    {
        return $this->material;
    }
}


class House
{
    protected $windows = [];

    protected $door;

    protected $floor;

    //Constructor Dependency Injection
    public function __construct($door, $floor)
    {
        //$this->window = $window;
        $this->door = $door;
        $this->floor = $floor;
    }

    public function addWindow(Window $window)
    {
        $this->windows[]= $window;
    }


    public function buildHouse()
    {

        $return = 'The house has '
            . $this->door->render()
            . ' '
            . $this->floor->render()
            . ' '
            . ' and it has ...';

        foreach ($this->windows as $window) {
            $return .= $window->render() . ' ';
        }
        //This function will remove pieces from a string
        //The first argument is the string
        //The second is where you want to start
        return substr($return, 0 ,-4);

//        return 'The house has a '
//        . $this->window->render() . ' window '
//        . $this->door->render() . ' door '
//        . $this->floor->render() . ' floor.';

        //this doesn't work because PHP doesn't know how to pass through the obj
    }

}

//this is good because the values can be fed in from a particular form or a
//user input
//$window = new Window('Slider with magnetic handles');

$door = new Door('Marrocan wood');
$floor = new Floor('Baroque hardoowd');

$house = new House($door, $floor);

//to use the toString() do the following:
//echo $slideType;


$obj1 = new Window('Sliding Window');
$obj2 = new Window('Glass Window');
$obj3 = new Window('Microsoft Window');

$house->addWindow($obj1);
$house->addWindow($obj2);
$house->addWindow($obj3);

echo $house->buildHouse();

?>