<?php
include('../database.php');

$id= $_GET['id'];

$query = "DELETE FROM servico.tecnico WHERE id=$id"; 
$result_query = $mysqli->query($query);


header("Location: index.php");
?>