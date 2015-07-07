<?php

class MyClass
{
    public $prop1 = "I'm a class property!";

    public static $count= 0;

    public function __construct()
    {
        echo 'The Class ' . __CLASS__ . ' was initiated!<br/>';
    }
    public function __destruct()
    {
        echo 'The Class ' . __CLASS__ . ' was destructed!<br/>';
    }

    //This is to be able to echo out of the class without a fatal error
    public function __toString()
    {
        echo "Using toString method: ";
        return $this->GetProperty();
    }

    public function SetProperty($newval)
    {
        $this->prop1 = $newval;
    }

    protected function GetProperty()
    {
        return $this->prop1 . '<br/>';
    }

    public static function plusOne()
    {
        return "The count is " . ++self::$count . "<br/>";
    }

}

class MyOtherClass extends MyClass
{
    public function __construct()
    {
        parent::__construct(); //This is to access the old constructor
        echo "A new constructor in " . __CLASS__ . "<br/>";
    }

    public function NewMethod()
    {
        echo "From our new method" . __CLASS__ . "<br/>";
    }

    public function CallProtected()
    {
        return $this->GetProperty();
    }
}
//$obj = new MyClass();
//echo $obj->GetProperty();
//echo $obj;
//
//$obj->SetProperty("New Class Property!");
//
//echo $obj->GetProperty();
//unset($obj);

//extension
//$newobj = new MyOtherClass();
//echo $newobj->NewMethod();


//protected example
//echo $newobj->GetProperty();
//echo $newobj->CallProtected();


do
{
echo MyClass::plusOne();
}while(MyClass::$count <10);


echo "End of File. <br/>";



?>