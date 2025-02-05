<?php
// O sistema deverá pegar o peso de um animal e deverá somar os pesos das partes.
// O sistema deverá calcular o valor a ser pago ao produtor baseado no valor da arroba


# Valor_arroba Preço 1 a cada 15kg;
# Produtor
# peso_1
# peso_2

# Nome aleatorio
$Produtor = "João Alberto";

# Aqui estaremos utilizando o preço do arroba a partir do site agron.com.br  dados retirados do dia 29/01/2025 do estado do RJ
# Valor em R$
$Valor_arroba = 312.00;

# Os pesos são divididos em 2 partes pois o animal é dividido em 2 partes para facilitar a venda .
# Os pesos estão representados kg
$peso_1 = 150;
$peso_2 = 200;

$peso_total = $peso_1 + $peso_2;

$valor_a_ser_pago = $peso_total / 15 * $Valor_arroba;

echo "O produtor $Produtor deverá receber R$ $valor_a_ser_pago .";