<?php

include('../database.php');

$numero_identificacao= $_POST['numero_identificacao'];
$descricao= $_POST['descricao'];
$valor= $_POST['valor'];
$solicitacao_servico= $_POST['solicitacao_servico'];

$query = "INSERT INTO servico.servico (numero_identificacao,descricao,valor, solicitacao_servico) VALUES ('$numero_identificacao','$descricao','$valor','$solicitacao_servico')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
