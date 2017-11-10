<?php

error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

define('CITY', 'Vancouver');
if (defined('CITY')) {
    print "all good ";
  } else {
exit;      
}
echo CITY;
const CITY = 245;
?>