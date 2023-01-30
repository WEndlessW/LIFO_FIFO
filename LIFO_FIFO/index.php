<?php
include "FIFO.php";
include "LIFO.php";


$x = new FIFO();
$x->push("Jedna");
$x->push("Dva");
$x->push("Tri");
$x->pop();

$y = new LIFO();
$y->push("Jedna");
$y->push("Dva");
$y->push("Tri");
$y->pop();
?>