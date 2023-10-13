<?php

include('../database.php');

$id= $_POST['id'];
$numero_identificacao= $_POST['numero_identificacao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];

$query = "UPDATE servico.material SET numero_identificacao='$numero_identificacao',descricao='$descricao',valor='$valor' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
