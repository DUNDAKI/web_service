<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){



    header('Content-type: application/json');

    require_once('dbConnect.php');

    // Definir UTF8 para a conexão

    mysqli_set_charset($conn, $charset);

    $response = array();

    // Prepara a consulta SQL

    $stmt = mysqli_prepare($conn, "SELECT cidade.id, cidade.nome, estado.sigla FROM cidade, estado");


    // Executa a consulta

    mysqli_stmt_execute($stmt);

    // Salva o resultado da consulta

    mysqli_stmt_store_result($stmt);

    // Gera os dados a serem apresentados
    // em variáveis conforme o select.

    mysqli_stmt_bind_result($stmt, $id, $nome, $sigla);

    // apresenta os dados da consulta
    // var_dump($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {

        while (mysqli_stmt_fetch($stmt)) {

            array_push($response, array(
                "id" => $id,
                "nome" => $nome,
                "estado" => $sigla));
        }
        
        echo json_encode($response);
        
    } else {
        
        echo json_encode($response);
        
    }
}
?>