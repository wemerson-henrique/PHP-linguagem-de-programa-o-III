<?php
    #Crie uma função que receba dois valores reais como argumentos e retorne o valor da raiz quadradada da soma dos quadrados. *

    function hipotenusa($valor1, $valor2){
        $hipotenusa = sqrt( pow($valor1, 2) + pow($valor2, 2));
        return $hipotenusa;
    }
    echo hipotenusa($_POST['valor1'],$_POST['valor2']);
?>