<?php

include('../database.php');

$numero_identificacao = $_POST['numero_identificacao'];
$data_solicitacao = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_solicitacao'])));  
$data_inicio = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_inicio'])));  
$data_termino = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_termino'])));  
$cliente= $_POST['cliente'];
$tecnico= $_POST['tecnico'];
$atentente= $_POST['atendente'];

echo $data_solicitacao."<br>";
echo $data_inicio."<br>";
echo $data_termino."<br>";

$query = "INSERT INTO servico.solicitacao_servico (numero_identificacao,data_solicitacao,data_inicio, data_termino, cliente ,tecnico , atentente  ) VALUES ('$numero_identificacao','$data_solicitacao','$data_inicio','$data_termino',$cliente, $tecnico, $atentente )" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
