<?php
header('Access-Control-Allow-Origin: *');
require_once('Conection.php');
$sql = "SELECT * FROM fornecedor ORDER BY id DESC";

$resultado = $pdo->query($sql);

foreach($resultado as $row){
        echo"<tr>";
            echo"<td>".$row["nome"]."</td>";
            echo"<td>".$row["produto"]."</td>";
            echo"<td>".$row["telefone"]."</td>";
            echo "<td>
                <button  type=`button` class='btn btn-success' onclick=getId('".$row['id']."')>Editar</button>
                <button  type=`button` class='btn btn-danger' onclick=remove('".$row['id']."') >Excluir</button>
            </td>";
        echo"</tr>";
}
?>