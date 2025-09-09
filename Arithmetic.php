<?php
//Arithmetic operators
$x = 10;
$y = 2;
$z = null;

$z = $x+ $y;
echo "$z <br>";

//increment/decrement
$counter =0;
$counter++;
echo $counter;
$counter +=5;
echo "<br>$counter <br>";

//operator precedence
//()
//**
// * / %
// + -
$total = 1+2-3*4/5**6;
echo $total;
?>