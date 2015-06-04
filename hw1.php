
<?php
// Create an input string using heredoc syntax
$inputString
    = <<<MYSTR
Can you feel the pulse in your wrist? For humans the normal pulse is 70 heartbeats per minute. Elephants have a slower pulse of 27 and for a canary it is 1000! If all the blood vessels in your body were laid end to end, they would reach about 60,000 miles. In one day your heart beats 100,000 times. Half your body’s red blood cells are replaced every seven days. By the time you are 70.5 you will have easily drunk over 12,000 gallons of water. Coughing can cause air to move through your windpipe faster than the speed of sound – over a thousand feet per second, this is a true statement! Germs only cause disease, right? But a common bacterium, E. Coli, found in the intestine helps us digest green vegetables and beans (also making gases – pew!). These same bacteria also make vitamin K, which causes blood to clot. If we didn’t have these germs we would bleed to death whenever we got a small cut! It takes more muscles to frown than it does to smile, this is not false and a fact. That dust on rugs and your furniture is not only dirt. It’s mostly made of dead skin cells. Everybody loses millions of skin cells every day which fall on the floor and get kicked up to land on all the surfaces in a room. You could say, "That’s me all over." It takes food 7.64 seconds to go from the mouth to the stomach via the esophagus.
MYSTR;

$far = explode(" ", $inputString);
$far = str_replace("’", "", $far);
$far = str_replace(",", "", $far);
$far = str_replace(".", "", $far);
$far = str_replace("\"", "", $far);

$array_num = array();
$array_bool = array();
$array_str = array();

// I started a count so I could see how many integers/booleans/strings existed in each
// as I couldn't find a way to do it with an array command
$counter_num = 0;
$counter_bool = 0;
$counter_str1 = 0;

//Numbers and Strings
foreach($far as $number) {
	$integer = (int)$number;
	if($integer != 0){
		$array_num[]= $integer;
		++$counter_num;
	}else{
		$back_string = (string)$number;
		$array_str[]= $back_string;
		++$counter_str1;
		}
}
//Booleans
foreach($far as $number) {
	if($number == "false") {
		$array_bool[]= $number;
		++$counter_bool;
	}elseif($number == "true"){
		$array_bool[]= $number;
		++$counter_bool;
	}
}

//the loop counted the numbers and strings, therefore we had to do this extra step to consider the booleans
$counter_str = $counter_str1 - $counter_bool;

/* count of each
echo $counter_bool . "</br>";
echo $counter_str . "</br>";
echo $counter_num . "</br>";
*/


$countArray = array('num_numeric' => $counter_num, 'num_sting' => $counter_str, 'num_bool' => $counter_bool);

print_r($countArray);
print_r($far);

die();

/*

//Text that is cleaner (without ? ! - " or ' ")

$newstring = str_replace('"', "\"", $inputString);

function multiexplode ($delimeters, $string){
	$ready = str_replace($delimeters, $delimeters[0], $string);
	$launch = explode($delimeters[0], $ready);
	return $launch;
}

$exploded = multiexplode(array("!",""," ","–","?",")","("), $newstring); // the comma and dot were removed
$exploded = str_replace("’", "", $exploded);
$exploded = str_replace(",", "", $exploded);
$exploded = str_replace(".", "", $exploded);
$exploded = str_replace("\"", "", $exploded);


// Setting up arrays so the corresponding integers/booleans/strings can go in ther
$array_num = array();
$array_bool = array();
$array_str = array();

// I started a count so I could see how many integers/booleans/strings existed in each
// as I couldn't find a way to do it with an array command
$counter_num = 0;
$counter_bool = 0;
$counter_str1 = 0;

//Numbers and Strings
foreach($exploded as $number) {
	$integer = (int)$number;
	if($integer != 0){
		$array_num[]= $integer;
		++$counter_num;
	}else{
		$back_string = (string)$number;
		$array_str[]= $back_string;
		++$counter_str1;
		}
}
//Booleans
foreach($exploded as $number) {
	if($number == "false") {
		$array_bool[]= $number;
		++$counter_bool;
	}elseif($number == "true"){
		$array_bool[]= $number;
		++$counter_bool;
	}
}

//the loop counted the numbers and strings, therefore we had to do this extra step to consider the booleans
$counter_str = $counter_str1 - $counter_bool;

// count of each
echo $counter_bool . "</br>";
echo $counter_str . "</br>";
echo $counter_num . "</br>";

$countArray = array('num_numeric' => $counter_num, 'num_sting' => $counter_str, 'num_bool' => $counter_bool)
print_r($countArray);

die();

// Used this to see the list of integers/booleans/strings
echo "<div>Numbers<div></br>";
foreach ($array_num as $num) {
	echo $num;
	echo "</br>";
}

echo "</br><div>Boolean</div></br>";
foreach ($array_bool as $bool) {
	echo $bool;
	echo "</br>";
}

echo "</br><div>String</div></br>";
foreach ($array_str as $str) {
	echo $str;
	echo "</br>";
}

*/


?>