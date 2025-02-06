<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesos</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            <?php
            $animal = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['animal'])) {
                $animal = $_POST['animal'];
                switch ($animal) {
                    case 'Boi':
                        echo "background-image: url('https://th.bing.com/th/id/R.5be368087aa74c963f73a45de31186a0?rik=7ZBpN3b647I5Sg&riu=http%3a%2f%2fwww.baixaki.com.br%2fimagens%2fwpapers%2fBXK13646_boi-de-carro800.jpg&ehk=O%2b0Tj8svO0lHI4YYujZ%2bwG9KDmbbmqgst36%2fx4Mb0e0%3d&risl=&pid=ImgRaw&r=0');";
                        break;
                    case 'Vaca':
                        echo "background-image: url('https://th.bing.com/th/id/R.58a66e2719a9e8f6ff01ac2ad93a6e05?rik=SF2XdgnYBLHpzA&riu=http%3a%2f%2finnovagro.files.wordpress.com%2f2013%2f07%2fvaca-alimentc3a1ndose.jpg&ehk=ChxjN%2bOJOawxypeaHbkGKrowyTXMIgLDcj622%2boYPc0%3d&risl=&pid=ImgRaw&r=0');";
                        break;
                    case 'Porco':
                        echo "background-image: url('https://th.bing.com/th/id/OIP.HjmYlefMJCNt4pzm9y5zKQHaE7?rs=1&pid=ImgDetMain');";
                        break;
                    case 'Galinha':
                        echo "background-image: url('https://th.bing.com/th/id/OIP.6uwZcgiGQGzrfHjmLSgybgHaE8?rs=1&pid=ImgDetMain');";
                        break;
                    default:
                        echo "background-image: url('https://i.ytimg.com/vi/iUewmU5T5_Y/maxresdefault.jpg');";
                        break;
                }
            } else {
                echo "background-image: url('https://i.ytimg.com/vi/iUewmU5T5_Y/maxresdefault.jpg');";
            }
            ?>
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
        .title {
            margin-bottom: 20px; /* Ajuste a margem conforme necessário */
        }
    </style>
</head>
<body>
    <div class="center">
        <h1 class="title">Cálculo do valor do animal</h1>
        <form action="" method="post">
            <label for="produtor">Selecione o produtor:</label>
            <select id="produtor" name="produtor">
                <option value="">--Selecione--</option>
                <option value="João Alberto">João Alberto</option>
                <option value="Maria Silva">Maria Silva</option>
                <option value="José Carlos">José Carlos</option>
            </select><br><br>
            <label for="animal">Selecione o animal:</label>
            <select id="animal" name="animal" required>
                <option value="Boi">Boi</option>
                <option value="Vaca">Vaca</option>
                <option value="Porco">Porco</option>
                <option value="Galinha">Galinha</option>
            </select><br><br>
            <label for="peso_1">Peso 1 (kg):</label>
            <input type="number" id="peso_1" name="peso_1" required><br><br>
            <label for="peso_2">Peso 2 (kg):</label>
            <input type="number" id="peso_2" name="peso_2" required><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $produtores = array(
                "João Alberto" => array("animal" => "Boi", "peso_1" => 200, "peso_2" => 300),
                "Maria Silva" => array("animal" => "Vaca", "peso_1" => 150, "peso_2" => 250),
                "José Carlos" => array("animal" => "Porco", "peso_1" => 100, "peso_2" => 200),
            );

            $Produtor = $_POST['produtor'];
            $animal = $_POST['animal'];
            $peso_1 = $_POST['peso_1'];
            $peso_2 = $_POST['peso_2'];

            if ($Produtor && isset($produtores[$Produtor])) {
                $animal = $produtores[$Produtor]['animal'];
                $peso_1 = $produtores[$Produtor]['peso_1'];
                $peso_2 = $produtores[$Produtor]['peso_2'];
            }

            $Valor_arroba = 0; // Inicializa a variável para evitar o aviso

            // Definindo o valor da arroba com base no tipo de animal
            switch ($animal) {
                case 'Boi':
                    $Valor_arroba = 300;
                    break;
                case 'Vaca':
                    $Valor_arroba = 250;
                    break;
                case 'Porco':
                    $Valor_arroba = 200;
                    break;
                case 'Galinha':
                    $Valor_arroba = 150;
                    break;
            }

            $peso_total = $peso_1 + $peso_2;
            $valor_a_ser_pago = $peso_total / 15 * $Valor_arroba;

            echo "<h1><p class='blink'><font color='green'><strong>O produtor $Produtor deverá receber R$ " . number_format($valor_a_ser_pago, 2, ',', '.') . "</strong></font></p></h1>";
        }
        ?>
    </div>
</body>
</html>