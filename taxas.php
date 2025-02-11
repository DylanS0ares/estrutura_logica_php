<?php
$taxas =['Dólar'=>5.10, 'Euro'=>5.50,'Libra'=>6.30,'Peso Argentino'=>0.05];
$valor =2.00;

foreach($taxas as $taxa){
    echo $valor*$taxa.'<br>';

}