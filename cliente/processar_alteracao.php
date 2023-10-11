<?php

include('../database.php');

$id= $_POST['id'];
$nome= $_POST['nome'];
$endereco= $_POST['endereco'];

$query = "UPDATE servico.atendente SET nome='$nome',endereco='$endereco' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
