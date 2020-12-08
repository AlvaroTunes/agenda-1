<?php

    // Host é local onde se encontra o banco de dados a ser conectado
    $host = 'localhost';
    // BD é nome do banco de dados a ser conectado
    $bd = 'agenda_pw2';
    // Usuário do banco de dados .... o login de conexão
    $usuario = 'root';
    // Senha para acesso ao nosso banco de dados
    $senha = '';

    // Criar a nossa conexão com o banco de dados
    if($conecta = mysqli_connect($host, $usuario, $senha, $bd)){
        // echo 'Conexão com o banco de dados, realizado com sucesso!';
    }else{
        echo 'Erro: '.mysqli_connect_error();
    }