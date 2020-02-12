<?php
    $nome = "Carlos";

    echo $nome;

    echo "<br/>"; //quebra linha em  html

    unset($nome); //apaga o valor da variavel

    if(isset($nome)) {

        echo $nome;
    } //o if  junto do comando isset vai validar se existe valor na variavel
    // se existir o valor é exibido, se não vai ficar em bravo

    echo "<br/>";

    //CONCATENAÇÃO

    $nome1 = "Pedro";
    $sobrenome = "Sabino";
    $nomecompleto = $nome1 . $sobrenome;

    echo $nome1.$sobrenome;
    echo "<br/>";
    echo "$nome1 $sobrenome";
    echo "<br/>";
    echo "Pedro"."Marcos";
    echo "<br/>";
    echo "Pedro". " "."Marcos";
    echo "<br/>";
    echo $nomecompleto;
    echo "<br/>";
    $nomecompleto2 =  $nome1 . " " . $sobrenome;
    echo $nomecompleto2;
    echo "<br/>";
    $nomecompleto3 = "$nome1 $sobrenome";
    echo $nomecompleto3;
    echo "<br/>";

    //TIPOS DE DADOS
    /*EXISTEM 8 TIPOS DE DADOS PRIMITIVOS
    TIPOS BASICOS: INTEIRO (NUMERO), STRING (TEXTO), PONTO FLUTUANTE (NUMERO DECIMAL EX: 10,50) E BOLEANO (TRUE E FALSE)
    TIPOS COMPOSTOS: ARRAY (POSSUI MAIS DE UM VALOR DENTRO) E 
    OBJETO (SÃO FEITAS CLASSES COM CARACTERISTICAS, EXEMPLO: CLASSE PESSOA, oq uma pessoa tem? NOME, IDADE, SEXO etc, desta forma a classe
    se torna um objeto e pode ser utilizade em outros lugares)
    DADOS ESPECIAIS: RESOURCE E NULL (vazio, nulo,)
?>