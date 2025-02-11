<?php
// array associativo
$alunos = [
    ['Nome' => 'João', 'Matéria' => 'Matemática', 'Nota' => 8],
    ['Nome' => 'Pedro', 'Matéria' => 'Matemática', 'Nota' => 9]
];

foreach ($alunos as $cadastro) {
    echo '<h1>Nome: ' . $cadastro['Nome'] . '<br></h1>';
    echo '<h1>Matéria: ' . $cadastro['Matéria'] . '<br></h1>';
    echo '<h1>Nota: ' . $cadastro['Nota'] . '<br></h1>';

    if ($cadastro['Nota'] >= 7) {
        echo '<h1>' . $cadastro['Nome'] . ' Aprovado</h1>';
    } else if ($cadastro['Nota'] < 7 && $cadastro['Nota'] > 5) {
        echo '<h1>' . $cadastro['Nome'] . ' em Recuperação</h1>';
    } else {
        echo '<h1>' . $cadastro['Nome'] . ' Reprovado</h1>';
    }
}