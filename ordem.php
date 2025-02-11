<?php

$array_2 = [15,10,35,20,18,30,5,60,45,40];
/*foreach($array_2 as $array){
    echo $array.'<br>';
}
    */
rsort($array_2);
echo implode(" ,",$array_2)."<br>";

echo '--------------------<br>';

sort($array_2);
echo implode(" ,",$array_2)."<br><br>";


// Uso de funções e aplicação bubble sort
function ordenarDecrescente(&$array_2) {
    $length = count($array_2);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array_2[$j] < $array_2[$j + 1]) {
              
                $temp = $array_2[$j];
                $array_2[$j] = $array_2[$j + 1];
                $array_2[$j + 1] = $temp;
            }
        }
    }
}

function ordenarCrescente(&$array_2) {
    $length = count($array_2);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array_2[$j] > $array_2[$j + 1]) {
              
                $temp = $array_2[$j+1];
                $array_2[$j+1] = $array_2[$j];
                $array_2[$j] = $temp;
            }
        }
    }
}



ordenarDecrescente($array_2);
print_r($array_2);
ordenarCrescente($array_2);
print_r($array_2);

                     
