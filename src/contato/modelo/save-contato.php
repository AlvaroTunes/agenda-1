<?php

    // conectar ao banco de dados
    include('../../conexao/conn.php');

    $USUARIO_ID = 1;

    // Criar a nossa query de cadastro de contatos
    $sql = "INSERT INTO CONTATO (NOME, CEP, LOGRADOURO, BAIRRO, CIDADE, NROCASA, TELEFONE, CELULAR, EMAIL, USUARIO_ID) VALUES ('".$_REQUEST['NOME']."', ".$_REQUEST['CEP'].", '".$_REQUEST['LOGRADOURO']."', '".$_REQUEST['BAIRRO']."', '".$_REQUEST['CIDADE']."', ".$_REQUEST['NROCASA'].", '".$_REQUEST['TELEFONE']."', '".$_REQUEST['CELULAR']."', '".$_REQUEST['EMAIL']."', ".$USUARIO_ID.")";

    // Tentar executar o comando SQL
    if(mysqli_query($conecta, $sql)){
        $dados = array('return' => true);
    }else{
        $dados = array('return' => false);
    }

    echo json_encode($dados);