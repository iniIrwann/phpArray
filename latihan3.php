<?php
// contoh array
$cars = array("Ferrary","Honda Toyota","Audi");
$negara = array("Indonesia","Malayasia","Singapore");
$kota = array("Jakarata","Kuala Lumpur","Bangkok"); 

//menampilkan array
// echo "I Like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ".";
// echo"<br>";
// var_dump($negara);
// echo"<br>";
// print_r($kota);

//menambahkan array
var_dump($kota);
$kota[] = "Bandung";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);

?>