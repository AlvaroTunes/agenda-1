<?php

    include('../../conexao/conn.php');

    $sql = "SELECT * FROM CONTATO";

    $resultado = mysqli_query($conecta, $sql);

    while($linha = mysqli_fetch_assoc($resultado)){
        $dados[] = array_map(null, $linha);
    }

    echo json_encode($dados);