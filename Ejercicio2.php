<?php

$number = 55;

if ($number != 0) {
echo "The number was not equal to 0";
}

if ($number >= 1000) {
echo "The number was greater than or equal to 1000";
}

/* Primero pasara por el primer if y como $number es distinto a 0 ejecutara la funcion echo. 
Despues pasara por el otro if pero como la condicion no se cumple saldra y se mostrara "The number was not equal to 0".*/

?>