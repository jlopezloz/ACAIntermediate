<?php

// We want the URL to basically be website friendly.

$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);
echo '$uri=' . $uri;
echo '<pre>';
print_r($parts);

$category = $parts[4];
echo '$category = '.$category.'<br/>';
$subCategory = $parts[5];
echo '$subCategory = ' .$subCategory.'<br/>';
$product = $parts[6];
echo '$product = ' .$product.'<br/>';



?>