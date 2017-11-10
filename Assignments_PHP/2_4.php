<?php

error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

$book1 = array('title1'=>'The Secrets of Self-Hypnosis', 'author1'=>'Adam Eason', 'pages1'=>"350");//associative arrays
$book2 = array('title2'=>'Eat That Frog!', 'author2'=>'Brian Tracy', 'pages2'=>"240");

$books = array();//index joint array
$books[] = $book1;
$books[1] = $book2;
echo 'Недавно я прочитал книги '.$books[0]['title1'].' и '.$books[1]['title2'].', написанные соответственно авторами '.$books[0]['author1'].' и '.$books[1]['author2'].', я осилил в сумме '.($books[0]['pages1']+$books[1]['pages2']).' страниц, не ожидал от себя подобного';
?>