<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'Formulario-luiz';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro na conexão com o banco.";
    // }
    // else
    // {
    //     echo "Conectado ao banco com sucesso!";
    // }
?>