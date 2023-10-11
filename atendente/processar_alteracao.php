<?php

include('../database.php');

$id= $_POST['id'];
$nome= $_POST['nome'];
$endereco= $_POST['endereco'];
echo $nome."<br>";
echo $endereço."<br>";

$query = "UPDATE livraria.editora SET nome='$nome',endereco='$endereco' WHERE id=$id" ;
echo $query;
$result_query = $mysqli->query($query);

header("Location: listar.php");
?>
