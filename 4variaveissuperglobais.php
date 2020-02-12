<?php 
    //variaveis pré definidas ou super globais, são variaveis pré definidas no php, não importa onde você esteja, é possivel acessar elas a qualquer momento,
    //isso é chamado de escopo.

    $numeros = $_GET["a"]; //desta forma os numeros vão retornar como uma string, se quisermos que o valor venha como inteiro, devemos fazer o seguinte
    /*$numeros = (int)$_GET["a"]; desta forma a string é convertida para inteiro pois as variaveis $_GET e $_POST por padrão retornam strings*/
    var_dump ($numeros);
    echo "<br/>";
    $numeros2 = (int)$_GET["a"];
    var_dump ($numeros2);

    echo "<br/>";    
    $ip = $_SERVER["REMOTE_ADDR"];

    echo $ip;
?>