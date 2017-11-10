 <?php

error_reporting(E_ERROR|E_WARNING|E_PARSE|E_NOTICE);
ini_set('display_errors', 1);

$book = array('title'=>'The Secrets of Self-Hypnosis', 'author'=>'Adam Eason', 'pages'=>'не помню сколько страниц');
echo 'Недавно я прочитал книгу '.$book['title'].', написанную автором'.$book['author'].', я осилил все '.$book['pages'].', мне она очень понравилась.';
?>