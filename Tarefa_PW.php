<?php
    echo "SOMA";
    echo "<br>";
    
    function soma($valor1, $valor2){
        $resultado  = $valor1 + $valor2;
        return $resultado;
    }
    
    $valor =  soma(1000, 2000);
    echo $valor;

    echo "<hr>";


    echo "SUBTRAÇÃO";
    echo "<br>";
    
    function subtracao($valor1, $valor2){
        $resultado  = $valor1 - $valor2;
        return $resultado;
    }
    
    $valor =  subtracao(9999, 666);
    echo $valor;

    echo "<hr>";
    

    echo "DIVISÃO";
    echo "<br>";
    
    function divisao($valor1, $valor2){
        $resultado  = $valor1 / $valor2;
        return $resultado;
    }
    
    $valor =  divisao(81, 9);
    echo $valor;

    echo "<hr>";

    echo "MULTIPLICAÇÃO";
    echo "<br>";
    
    function multiplicacao($valor1, $valor2){
        $resultado  = $valor1 * $valor2;
        return $resultado;
    }
    
    $valor =  multiplicacao(999999, 9999999);
    echo $valor;

?>
