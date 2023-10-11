<?php

include('../database.php');

$id= $_POST['id'];
$numero_indentificacao= $_POST['numero_indentificao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];

$query = "UPDATE servico.atendente SET numero_indentificao='$numero_indentificacao',descricao='$descricao',valor='$valor' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
