<?php
    $servidor = 'localhost';
    $usuario  = 'root';
    $senha    = 'root';
    $banco    = 'moveis';

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conexao){
        die("falha na conexão com o banco: ". mysqli_connect_error());
    }

?>