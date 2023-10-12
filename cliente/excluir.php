<?php

include('../database.php');

$id= $_GET['id'];

$query = "DELETE FROM servico.cliente WHERE id=$id"; 
$result_query = $mysqli->query($query);


header("Location: index.php");
?>