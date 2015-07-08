<?php

class SingletonTest
{
    private $instance;

    private function __construct()
    {
     echo 'I was instantiated' . "\n\n";
    }

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$obj1= SingletonTest::getInstance();
$obj2= SingletonTest::getInstance();
$obj3= SingletonTest::getInstance();

echo 'I am here';


?>

