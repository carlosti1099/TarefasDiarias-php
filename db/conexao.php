<?php

    $servidor = "127.0.0.1";
    $senha = "";
    $usuario = "root";
    $banco = "db-tarefas-diarias";

    $con = mysqli_connect($servidor, $usuario, $senha, $banco);
    // Check conexao
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to Mysql: " . mysqli_connect_error();
    }

mysqli_select_db($con, $banco);

?>