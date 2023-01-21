<?php

function exercicio02(){
    $num1 = 0;
    $num2 = 1;
    $resultado = 0;
    $msg = "";

    echo "Sequência de Fibonacci de mil números: <br><br> $num1 $num2";

    for ($i = 0; $i <= 1000; $i++){

        $resultado = $num1 + $num2;  
        $num1 = $num2;
        $num2 = $resultado;
        echo $resultado;
    }
}

echo exercicio02();
?>