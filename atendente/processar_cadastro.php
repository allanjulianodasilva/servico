<?php

include('../database.php');

$nome= $_POST['nome'];
$endereço= $_POST['endereco'];
echo $nome."<br>";
echo $endereço."<br>";

$query = "INSERT INTO livraria.editora (nome,endereco) VALUES ('$nome','$endereço')" ;
$result_query = $mysqli->query($query);

header("Location: listar.php");
?>
