<?php
header('Access-Control-Allow-Origin: *');
require_once('conection.php');
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];

if(empty($nome) || empty($sobrenome) || empty($cpf) || empty($cargo)){
    echo json_encode(["message" => "Todos os campos precisam ser preenchidos!"]);
} else {
    $str = "SELECT * FROM usuarios WHERE cpf='$cpf'";
    $response = $pdo->query($str);

    if($response-> num_rows > 0){
        echo json_encode(["message"=>"CPF já  cadastrado"]);
    }else{
        $sql= "INSERT INTO usuarios (nome, sobrenome, cpf, cargo) VALUES ('".$nome."', '".$sobrenome."', '".$cpf."', '".$cargo."')";
        
        $result =  $pdo->query($sql);
        
        if(!$result){
            http_response_code(500);
            echo json_encode(["message"=>"Error ao inserir no banco de Dados"]);
        }else{
            http_response_code(200);
            echo json_encode(["message" =>"Salvo com sucesso"]);
        }
    }
}