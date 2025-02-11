<?php

$dados = array(
    "Nome" => "João",
    "dt_nasc"=>"01/01/2000",
    "documentos" => array(
        'rg' => '123456',
        'cpf' => '123.456.789-00',
        'cnh' => '123456789'
    ),
    "endereco" => array(
        'rua' => 'Rua 1',
        'numero' => '123',
        'bairro' => 'Centro',
        'cidade' => 'São Paulo',
        'estado' => 'SP',
        'cep' => '12345-678'
    ),
    "filiacao" => array(
        'pai' => 'José',
        'mae' => 'Maria',
    ),
    "contatos" => array(
        'telefone' => '11 1234-5678',
        'celular' => '11 91234-5678',
        'email' => 'aisdhasih@gmail.com'
        )

    );


    foreach($dados as $key => $value){
        if(is_array($value)){
            echo "<h2>$key</h2>";
            foreach($value as $key2 => $value2){
                echo "<b>$key2</b>: $value2<br>";
            }
        }else{
            echo "<b>$key</b>: $value<br>";
        }
    }