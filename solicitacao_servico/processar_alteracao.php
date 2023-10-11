<?php

include('../database.php');

$id= $_POST['id'];
$numero__identificacao = $_POST['numero_identificacao'];
$data_solicitacao= $_POST[' data_solicitacao'];
$data_inicio = $_POST['data_inicio'];
$data_termino= $_POST[' data_termino'];
$cliente= $_POST['cliente '];
$tecnico= $_POST['tecnico '];
$atentente= $_POST['atentente'];

$query = "UPDATE servico.solicitacao_servico SET numero_identificacao='$numero__identificacao ',data_solicitacao='$data_solicitacao',data_inicio='$data_inicio',data_termino= '$data_termino ', cliente='$cliente', tecnico='$tecnico', atentente= '$atentente' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
