<?php

function exercicio03(){

    $binario = "1101";
    $decimal = 0;
    $contaAux = 0;

    $quantidade = strlen($binario) - 1;

    for ($i = $quantidade; $i >= 0; $i--){
        $potencia = $quantidade - $i;
        $contaAux = $binario[$i] * pow(2, ($potencia));

        $decimal += $contaAux;
    }
    echo "Converter $binario em decimal = $decimal <br>";

    $decimal = 20;
    $binario = "";

    while($decimal > 1){
            $binario .= $decimal % 2;
            $contaAux = $decimal / 2;
            $decimal = $decimal - $contaAux;
    }

    $binario .= "1";
    echo "Converter $decimal em binário = ".strrev($binario);

}

echo exercicio03();
?>