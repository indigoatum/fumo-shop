<?php

// arrays tridimencionales
$numeros = array(array(array (1,2,3),array (2,4,6) ));
//print_r($numeros);
for ($x=0 ; $x < 1 ; $x++ ) {
for ($y=0 ; $y < 1 ; $y++ ) {
for ($z=0 ; $z < 3 ; $z++ ) {
echo $numeros[$x][$y][$z]; 
 	// code...
 } 
 	// code...
 } 
	// code...
}
?>

