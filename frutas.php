<?php

$frutas = ['maça','banana','uva','laranja','mamão'];
echo "------------------------------------------<br>";
foreach($frutas as $fruta){
    echo "$fruta <br>";
}

$frutas[] = 'abacaxi';
echo "------------------------------------------<br>";
foreach($frutas as $fruta){
    echo "$fruta <br>";
}
unset($frutas[0]);
echo "------------------------------------------<br>";
foreach($frutas as $fruta){
    echo "$fruta <br>";
}
echo "------------------------------------------<br>";
array_pop($frutas);
foreach($frutas as $fruta){ // variavel para rodar plural variavel que será executada singular
    echo "$fruta <br>";
}
echo "------------------------------------------<br>";
$fruta_invertido = array_reverse($frutas);
foreach($fruta_invertido as $fruta){
    echo "$fruta <br>";
}