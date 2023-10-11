<?php

include('../database.php');

$nome= $_POST['nome'];
$endereço= $_POST['endereco'];

$query = "INSERT INTO servico.atendente (nome,endereco) VALUES ('$nome','$endereço')" ;
$result_query = $mysqli->query($query);

header("Location: index.php");
?>
