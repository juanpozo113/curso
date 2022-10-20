<?php

$N = 100;
$cont = 0;
/*
while ($N < 100){
echo $N . PHP_EOL;
$cont = ($N+=2);
}*/

do{
    echo $N . PHP_EOL;
    $cont = ($N+=2);
}while ($N < 100);