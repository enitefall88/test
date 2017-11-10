<?php

error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

$name='Anton';
$age='30';
echo 'My name is '.$name.' ,and I am '.$age.' years old';
unset($age, $name);
//echo $age;
?>