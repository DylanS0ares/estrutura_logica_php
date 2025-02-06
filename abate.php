<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Abate</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
        .blink {
            animation: blink 1s linear infinite;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="center">
        <?php
        $produtores = array(
            "João Alberto" => array("animal" => "Boi", "peso_1" => 200, "peso_2" => 300),
            "Maria Silva" => array("animal" => "Vaca", "peso_1" => 150, "peso_2" => 250),
            "José Carlos" => array("animal" => "Porco", "peso_1" => 100, "peso_2" => 200),
        );
        foreach($produtores as $Produtor => $produtor){
            $animal = $produtor['animal'];
            $peso_1 = $produtor['peso_1'];
            $peso_2 = $produtor['peso_2'];
            $peso_total = $peso_1 + $peso_2;
            if ($animal == 'Boi') {
                $Valor_arroba = 300;
            } else if ($animal == 'Vaca') {
                $Valor_arroba = 250;
            } else if ($animal == 'Porco') {
                $Valor_arroba = 200;
            } else if ($animal == 'Galinha') {
                $Valor_arroba = 150;
            }
            $valor_a_ser_pago = $peso_total / 15 * $Valor_arroba;

            echo "<h1><p class='blink'><font color='orange'><strong>O produtor $Produtor deverá receber R$ " . number_format($valor_a_ser_pago, 2, ',', '.') . "</strong></font></p></h1>";
        }
        ?>
    </div>
</body>
</html>