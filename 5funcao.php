<?php

    $pessoa = "João";

        //estrutura basica de uma função, function -nomefuncao- () {}
        function drop() {
            global $pessoa; //torna a variavel $pessoa global, desta forma ela pode ser usada e reconhecida na função
            echo $pessoa;

        }

        function drop2() {
            $pessoa = "Paulinho";
            echo $pessoa."agora no drop2";
        }

        drop(); //agora q a função foi chamada ela vai apresentar o valor joão pois a função consegue 
                //reconhecer a variavel $nome agora que esta é global
        echo "<br/>";
        drop2();

?>
