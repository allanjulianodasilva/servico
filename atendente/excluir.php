<?php

include('../database.php');

$id= $_GET['id'];

$query = "DELETE FROM livraria.editora WHERE id=$id"; 
$result_query = $mysqli->query($query);


header("Location: listar.php");
?>