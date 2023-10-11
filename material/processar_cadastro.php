<?php

include('../database.php');

$numero_indentificao= $_POST['numero_indentificao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];

$query = "INSERT INTO servico.material (numero_indentificao,descricao,valor) VALUES ('$descricao','$descricao','$valor')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
