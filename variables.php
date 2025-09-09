<?php
$name = "Parul bhadoria";
$food = "Paneer Jalfrezi";
$email = "parul@gmail.com";

$age = 21;
$users = 2;
$quantity = 3;

$gpa = 8.88;
$price = 239.99;
$tax_rate = 4.99;

$employed = true;
$online = false;
$for_sale = true;

echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email is {$email} <br>";
echo "You are {$age} years old <br>";
echo "There are {$users} users online <br>";
echo "You have ordered {$quantity} items <br>";

echo "Your GPA is {$gpa} <br>";
echo " Your paneer jalfrezi costs \${$price} <br>";
echo "The tax rate is {$tax_rate}% <br>";

echo "Employed: {$employed} <br>";
echo "Online: {$online} <br>";

echo "You have ordered {$quantity} x {$food}";
$total = $quantity * $price;
echo " Your total is: Rs.{$total} <br>";
?>
