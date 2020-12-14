<?php

    // conectar ao banco de dados
    include('../../conexao/conn.php');

    $USUARIO_ID = 1;

    // Criar a nossa query de cadastro de contatos
    $sql = "UPDATE CONTATO SET NOME = '".$_REQUEST['NOME']."', 
                        CEP = '".$_REQUEST['CEP']."', 
                        LOGRADOURO = '".$_REQUEST['LOGRADOURO']."', 
                        NROCASA = '".$_REQUEST['NROCASA']."', 
                        BAIRRO = '".$_REQUEST['BAIRRO']."', 
                        CIDADE = '".$_REQUEST['CIDADE']."', 
                        EMAIL = '".$_REQUEST['EMAIL']."', 
                        TELEFONE = '".$_REQUEST['TELEFONE']."', 
                        CELULAR = '".$_REQUEST['CELULAR']."' 
                        WHERE ID = ".$_REQUEST['ID']."";

    // Tentar executar o comando SQL
    if(mysqli_query($conecta, $sql)){
        $dados = array('return' => true);
    }else{
        // $dados = array('return' => false);
        echo mysqli_error($conecta);
    }

    echo json_encode($dados);