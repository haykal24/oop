<?php
require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$shaun = new Animal("shaun");
echo "Name : " . $shaun->name . "<br>";
echo "legs : " . $shaun->legs . "<br>";
echo "cold blooded : " . $shaun->cold_blooded . "<br><br>";

$buduk = new Frog("buduk");
echo "Name : " . $buduk->name . "<br>";
echo "legs : " . $buduk->legs . "<br>";
echo "cold blooded : " . $buduk->cold_blooded . "<br>";
echo "jump : " . $buduk->jump() . "<br><br>";

$kera_sakti = new Ape("kera sakti");
echo "Name : " . $kera_sakti->name . "<br>";
echo "legs : " . $kera_sakti->legs . "<br>";
echo "cold blooded : " . $kera_sakti->cold_blooded . "<br>";
echo "Yell : " . $kera_sakti->yell() . "<br>";
?>
