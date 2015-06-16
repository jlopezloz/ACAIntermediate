


<!DOCTYPE html>
<html>
  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <h2>Smaller Text</h2>
    <p class="lead"> What type of paragraph is this? </p>
    <ul class="list-group">
      <li class="list-group-item">
        <span class="badge" background-size="50% 50%">14</span>
        Cras justo odio
      </li>
    </ul>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>



<!--
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap    css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
-->


<?php
die();
?>




/**
& - > this is a reference, unless you change the name of the variable or return the variable at the end it is different. You add it to functions. 
Always use return instead of echo so you can debugg easier.
**/
$personhands = [];

$people = array('Jesus', 'Hey Zeus', ' Hey Seuss');

foreach ($people as $person) {
    $cardsFromDeck = ['AH', '10C', '3S'];
    $personhands[$person] = $cardsFromDeck;
}

echo '<pre>';
print_r($personhands);


die();

$multiarray = array(
    'Player1' => array('Card1', 'Card2', 'Card3'),
    'Player2' => array('Card1', 'Card2', 'Card3'),
    'Player3' => array('Card1', 'Card2', 'Card3'),
);

echo '<pre>';
print_r($multiarray);


/**
 * Teach everyone how to practice karate
 *
 * @param string $name        Instructor name
 * @param int    $numStudents How many students in the class
 * @param array  $names       Array of student names
 *
 * @return bool [true = Yes! Everyone learned karate, false = No! Not everyone is a karate kid]
 */
function learnKarate($name, $numStudents, $names){
    echo 'Instructor for this class is: ' . $name . PHP_EOL;

    echo 'There are ' . $numStudents . ' in this karate class!' . PHP_EOL;

    foreach ($names as $name) {
        echo $name . ' is a karate kid!';
    }

    return true; // Everyone is a karate kid!
}

$students = array('Hugh Jass', 'Kung Fu Panda', 'Donald Macaque');

if(learnKarate($instructorName = 'Chun Lee', $numStudents = 12, $students)){
    echo 'Everyone is a karate kid!';
}else{
    echo 'Some kids were left behind!';
}

die();
?>


<?php

/**
 * This function accepts two required arguments and one optional argument.
 * The sole purpose of this function is to make cookies!
 *
 * @param int    $howMany    How many cookies do you want me to make
 * @param string $name       Name to print on each cookie
 * @param bool   $shouldBake Should we bake these? By default we will bake these!
 *
 * @return array
 */
function makeCookies($howMany, $name, $shouldBake = true)
{
    $cookies = array();

    if ($shouldBake == true) {
        $cookieName = $name . ' Baked Cookie';
    } else {
        $cookieName = $name . ' Cookie Dough';
    }

    // You can also rewrite the conditional above using a ternary, shortening 5 lines of code into 1
    $cookieName = $shouldBake ? $name . ' Baked Cookie' : $name . ' Cookie Dough';

    // Loop over the $howMany variable, to create elements in the $cookies array
    for ($i = 1; $i <= $howMany; $i++) {
        $cookies[] = $cookieName . ' - ' . $i;
    }

    // Return the array we just created, like we promised we would do in the DocBlock
    return $cookies;
}

// Make some baked cookies
$cookies = makeCookies(12, 'Foo-Kie');
print_r($cookies);

// I'll take the cookie dough!
$cookieDoughCookies = makeCookies(12, 'Bar-Kie', $shouldBake = false);
print_r($cookieDoughCookies);


?>