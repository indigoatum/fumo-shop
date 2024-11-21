<?php

$numeros = array(array(array (1,2,3),array (2,4,6) ));

for ($x=0 ; $x < 1 ; $x++ ) {
for ($y=0 ; $y < 2 ; $y++ ) {
for ($z=0 ; $z < 3 ; $z++ ) {
	echo "$x,$y,$z ="$numeros[$x][$y][$z]."<br>";
}
}

}
?>