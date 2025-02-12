<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    h2 {
        color: #333;
    }

    b {
        color: #666;
    }
</style>
<?php
$boletim_escolar = [
    'alunos' => [
        [
            'Nome' => 'João',
            'Notas' => [
                'bimestre' => [
                    '1º Bimestre' => [
                        'Matemática' => 7,
                        'Português' => 6,
                        'História' => 8,
                    ],
                    '2º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 7,
                        'História' => 9,
                    ],
                    '3º Bimestre' => [
                        'Matemática' => 6,
                        'Português' => 5,
                        'História' => 7,
                    ],
                    '4º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 6,
                        'História' => 7,
                    ]
                ]
            ]
        ],
        [
            'Nome' => 'Maria',
            'Notas' => [
                'bimestre' => [
                    '1º Bimestre' => [
                        'Matemática' => 7,
                        'Português' => 6,
                        'História' => 8,
                    ],
                    '2º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 7,
                        'História' => 9,
                    ],
                    '3º Bimestre' => [
                        'Matemática' => 6,
                        'Português' => 5,
                        'História' => 7,
                    ],
                    '4º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 6,
                        'História' => 7,
                    ]
                ]
            ]
        ],
        [
            'Nome' => 'Pedro',
            'Notas' => [
                'bimestre' => [
                    '1º Bimestre' => [
                        'Matemática' => 7,
                        'Português' => 6,
                        'História' => 8,
                    ],
                    '2º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 7,
                        'História' => 9,
                    ],
                    '3º Bimestre' => [
                        'Matemática' => 6,
                        'Português' => 5,
                        'História' => 7,
                    ],
                    '4º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 6,
                        'História' => 7,
                    ]
                ]
            ]
        ],
        [
            'Nome' => 'Enzo',
            'Notas' => [
                'bimestre' => [
                    '1º Bimestre' => [
                        'Matemática' => 7,
                        'Português' => 6,
                        'História' => 8,
                    ],
                    '2º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 7,
                        'História' => 9,
                    ],
                    '3º Bimestre' => [
                        'Matemática' => 6,
                        'Português' => 5,
                        'História' => 7,
                    ],
                    '4º Bimestre' => [
                        'Matemática' => 8,
                        'Português' => 6,
                        'História' => 7,
                    ]
                ]
            ]
        ]
    ]
];

foreach ($boletim_escolar['alunos'] as $aluno) {
    echo "<h2>{$aluno['Nome']}</h2>";
    $materias = [];
    foreach ($aluno['Notas']['bimestre'] as $bimestre => $notas) {
        foreach ($notas as $materia => $nota) {
            if (!isset($materias[$materia])) {
                $materias[$materia] = [];
            }
            $materias[$materia][] = $nota;
          
        }
    }
    foreach ($materias as $materia => $notas) {
        $media = array_sum($notas) / count($notas);
        echo "<b>$materia</b>: Notas Bimestrais = " . implode(', ', $notas) .'<br>'. "Média das notas de = $media<br>";
    }
}
?>
