Very basic stuff;
A class is a blueprint ()
An obejct is the class

Thus you arrange them the following way => blueprint(house);
instantiating a class you are creating a new object.

You can make an object and give it some functionality.

Class Kid extends Parents (The parent extend the framework to its kid)


Keys:
public -> anyone can acces this property from anywhere outside the code
protected
private


Command N to generate stuff: getters and setters.

<?php

class Product
{
    public $name;
    public $price;
    public $inStock;

    public function __construct($name, $price, $inStock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->inStock = $inStock;
    }
}

$shoe = new Product('Nike', 25.55, true);






die();

////our class definintion
//class Person
//{
//    public $name;
//    public $age;
//
//    public $canDrink;
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->isAllowedToDrink();
//    }
//
//    /**
//     * Is this person allowed to drink?
//     * This is a 'method' because its is a function inside of a class
//     * @return bool
//     */
//
//    public function isAllowedToDrink()
//    {
//        if($this->age >=21){
//            $this->canDrink = 'Yes';
//            //return true;
//        }else{
//            $this->canDrink = 'No';
//            //return false;
//        }
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//}
////where we instantiate the class into an object
//// This is where we create an 'instance' from the blueprint
//$student = new Person('Yizuss', 18);
//$teacher = new Person('Hey Zeus', 21);
//$principal = new Person('Hey Seuss', 15);
//
//$students = array('Bob' => 21, 'Mark'=> 22,'John'=>23,'Jay'=>24);
//$studentall = [];
//foreach($students as $person =>$studentage){
//    $studentall = new Person($person, $studentage);
//
//
//}
//echo '<pre>';
//print_r($student);
//echo '<pre>';
//print_r($teacher);
//echo '<pre>';
//print_r($principal);
//
//if($student->isAllowedToDrink()){
//    echo 'You can drink!!';
//}else{
//    echo 'You can\'t drink';
//}
//
//
//
//
//
?>
