<?php
// endereco
// nome do BD
// usuario
// senha

$endereco = 'localhost';
$banco = 'aula2';
$usuario = 'postgres';
$senha = '0810';

try {
  // sgbd:host;port;dbname
  // usuario
  // senha
  // errmode
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha);

  //echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}

?>