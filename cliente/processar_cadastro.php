<?php

include('../database.php');

$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$ano_publicacao= $_POST['ano_publicacao'];
$editora_id= $_POST['editora_id'];

$query = "INSERT INTO livraria.acervo (titulo, autor, ano_publicacao, editora_id) VALUES ('$titulo','$autor','$ano_publicacao','$editora_id')" ;
$result_query = $mysqli->query($query);

header("Location: listar.php");
?>
