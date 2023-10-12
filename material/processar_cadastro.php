<?php

include('../database.php');

$numero_indentificacao= $_POST['numero_indentificacao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];

$query = "INSERT INTO servico.material (numero_indentificacao, descricao, valor) VALUES ('$numero_indentificacao','$descricao','$valor')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
