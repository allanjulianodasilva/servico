<?php

include('../database.php');

$numero__identificacao = $_POST['numero_identificacao'];
$data_solicitacao= $_POST['data_solicitacao'];
$data_inicio = $_POST['data_inicio'];
$data_termino= $_POST['data_termino'];
$cliente= $_POST['cliente'];
$tecnico= $_POST['tecnico'];
$atentente= $_POST['atentente'];

$query = "INSERT INTO servico.solicitacao_servico (numero_identificacao,data_solicitacao,data_inicio, data_termino, cliente ,tecnico , atentente  ) VALUES ('$numero__identificacao','$data_solicitacao','$data_inicio','$data_termino',$cliente, $tecnico, $atentente )" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
