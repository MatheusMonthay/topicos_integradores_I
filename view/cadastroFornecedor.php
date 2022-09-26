<?php
header('Access-Control-Allow-Origin: *');
require_once('conection.php');
$nome = $_POST['nome'];
$produto = $_POST['produto'];
$telefone = $_POST['telefone'];

if(empty($nome) || empty($produto) || empty($telefone)){
    echo json_encode(["message" => "Todos os campos precisam ser preenchidos!"]);
} else {       
        $sql= "INSERT INTO fornecedor (nome, produto, telefone) VALUES ('".$nome."', '".$produto."', '".$telefone."')";
        
        $result =  $pdo->query($sql);
        
        if(!$result){
            http_response_code(500);
            echo json_encode(["message"=>"Error ao inserir no banco de Dados"]);
        }else{
            http_response_code(200);
            echo json_encode(["message" =>"Salvo com sucesso"]);
        }
    }
