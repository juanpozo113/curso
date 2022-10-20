<?php
$A = readline("Ingrese el valor de A: ");
$B = readline("Ingrese el valor de B: ");
$C = readline("Ingrese el valor de C: ");

if ($A > $B && $A > $C){
    if ($B > $C)
        echo "C = $C " . "B = $B " . "A = $A ";
    else echo "B = $B " . "C= $C " . "A = $A ";
}else if ($B > $A && $B > $C){
    if ($A > $C)
    echo "C = $C " . "A = $A " . "B = $B ";
    else echo " A = $A " . "C = $C " . "B = $B ";
}
else if ($C > $A && $C > $B){
    if ($A > $B)
    echo "B = $B " . "A = $A " . "C = $C ";
    else echo "A = $A " . "B = $B " . "C = $C ";}
    