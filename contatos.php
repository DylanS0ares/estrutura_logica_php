<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
<style>
    body{
        background-color: #006400;
        font-family: Arial, sans-serif;
    }
    .container {
            width: 300px;
            margin: 0 auto;
            background-color: #d3d3d3; /* Cor de fundo cinza para a caixa */
            padding: 20px;
            border-radius: 10px;
        }
        h2 {
            color: #333;
        }
        b {
            color: #555;
        }
        hr {
            border: 1px solid #333; /* Cor e espessura da linha */
            margin: 10px 0; /* Espaçamento vertical */
        }
        .titulo{
            color: #006400;
            align-items: center;
            
        }
    </style>
</head>
<body>
    
    <div class="container">
    <h1 class = 'titulo'>FICHA CADASTRAL</h1>
    <?php

    $dados = array(
        "Nome" => "João",
        "Data de nascimento"=>"01/01/2000",
        "Documentos" => array(
            'rg' => '123456',
            'cpf' => '123.456.789-00',
            'cnh' => '123456789'
        ),
        "Endereço" => array(
            'logradouro'=> 'Rua A',
            'numero' => '123',
            'bairro' => 'Centro',
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'cep' => '12345-678',
            'complemento' => 'apto 123'),
        "Filiação" => array(
            'pai' => 'José',
            'mae' => 'Maria',
        ),
        "Contatos" => array(
            'telefone' => '11 1234-5678',
            'celular' => '11 91234-5678',
            'email' => 'aisdhasih@gmail.com',
            'telefone fixo' => '11 1234-5678'
        ),

        );


    foreach($dados as $key => $value){
        if(is_array($value)){
            echo "<h2>$key</h2>";
            echo "<hr>";
            foreach($value as $key2 => $value2){
                echo "<b>$key2</b>: $value2<br>";
                
            }
        }else{
            echo "<b>$key</b>: $value<br>";
        }
    }
    ?>
    </div>
</body>
</html>