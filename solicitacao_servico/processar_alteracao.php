<?php

include('../database.php');

$id= $_POST['id'];
$numero_identificacao = $_POST['numero_identificacao'];
$data_solicitacao = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_solicitacao'])));  
$data_inicio = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_inicio'])));  
$data_termino = date("Y-m-d",strtotime(str_replace('/','-',$_POST['data_termino'])));  
$cliente= $_POST['cliente'];
$tecnico= $_POST['tecnico'];
$atendente= $_POST['atendente'];

$query = "UPDATE servico.solicitacao_servico SET numero_identificacao='$numero_identificacao',data_solicitacao='$data_solicitacao',data_inicio='$data_inicio',data_termino= '$data_termino ', cliente='$cliente', tecnico='$tecnico', atentente= '$atendente' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
