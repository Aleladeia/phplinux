<?php

    //TIPOS DE VARIAVEIS, SÃO 8 TIPOS DIVIDIDOS EM 3 GRUPOS
    // /////////////////////////////////tipos basicos///////////////////////////////////////////////////////////////
    $nome = "joão"; //string com aspas
    $site = 'google.com'; // string com apostrofo
    $ano = 2020; // inteiro
    $preço = 25.10; // ponto flutuante
    $bloqueado = false; // boleano
    // //////////////////////////////// tipos compostos//////////////////////////////////////////////////////////
    $frutas =  ["abacaxi", "laranja", "melancia", "melão", "mamão"]; //array

    //ou

    $frutas2 = array ("morango", "ameixa", "limão"); //array

    echo $frutas [2];
    echo "<br/>";
    echo $frutas2 [0];
    echo "<br/>";
    $nascimento = new DateTime(); //objeto, ja utilizando POO.

    //var_dump($nascimento);


    //////////////////////////////////dados especiais///////////////////////////////////////////////////////////

    $arquivo = fopen("exemplo3.php", "r") ;

    //var_dump($arquivo);

    $nulo = NULL;


?>
