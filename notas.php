<?php
echo '<style>
@keyframes blink {
    50% {
        opacity: 0;
    }
}
.blink {
    animation: blink 1s linear infinite;
}
</style>';

$notas = array(5, 5, 5, 10);
$media = 0;
$aluno = "João";
for ($i = 0; $i < count($notas); $i++) {
    $media += $notas[$i];
}

$media /= count($notas); 

if ($media >= 7) {
    echo "<h1><p class='blink'><font color='blue'> Parabéns você foi Aprovado! </font></p></h1><br>".'Olá '.$aluno.' sua média foi de: '.$media;
} else if($media >=5 && $media<7){
    echo"<h1><p class='blink'><font color='orange'>Você está de recuperação!</font></p></h1><br>".'Olá '.$aluno.' sua média foi de: '.$media;

}
else{
    echo "<h1><p class='blink'><font color='red'>Poxa que pena você foi Reprovado!</font></p></h1><br>".'Olá '.$aluno.' sua média foi de: '.$media;
}
