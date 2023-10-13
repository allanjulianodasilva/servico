<?php

include('../database.php');

$id= $_POST['id'];
$numero_indentificacao= $_POST['numero_indentificacao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];
$solicitacao_servico= $_POST['solicitacao_servico'];

$query = "UPDATE servico.servico SET numero_indentificacao='$numero_indentificacao',descricao='$descricao=',valor='$valor',solicitacao_servico= '$solicitacao_servico ' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
