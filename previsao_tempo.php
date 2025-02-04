<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Previsão do Tempo</title>
</head>
<body>
    <form action="" method="post">
        <label for="temperatura">Digite a temperatura (ou deixe em branco para sair):</label>
        <input type="number" id="temperatura" name="temperatura">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperatura = $_POST['temperatura'];

        if ($temperatura === '') {
            echo "Saindo...";
            exit;
        }

        if (!is_numeric($temperatura)) {
            echo "Por favor, insira um valor numérico.<br>";
        } else {
            if ($temperatura >= 30) {
                echo "<h1>O dia está ensolarado.</h1><br>";
            } elseif ($temperatura >= 20 && $temperatura < 30) {
                echo "<h1>O dia está nublado.</h1><br>";
            } else {
                echo "<h1>O dia está chuvoso.</h1><br>";
            }
        }
    }
    ?>
</body>
</html>
