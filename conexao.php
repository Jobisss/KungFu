<?php

    $servidor="localhost";
    $usuario="joao";
    $senha="1234";
    $banco="sabado";

    $mysqli = new mysqli($servidor,$usuario, $senha, $banco);

    if($mysqli->connect_errno){
        echo "Nao deu certo" . $mysqli->connect_error;
        exit();
    }

?>