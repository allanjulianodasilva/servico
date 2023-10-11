<?php

include('../database.php');

$id= $_POST['id'];
$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$ano_publicacao= $_POST['ano_publicacao'];
$editora_id = $_POST['editora_id'];


$query = "UPDATE livraria.acervo SET titulo='$titulo',autor='$autor',ano_publicacao='$ano_publicacao',editora_id='$editora_id' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: listar.php");
?>
