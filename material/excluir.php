<?php

include('../database.php');

$id= $_GET['id'];

$query = "DELETE FROM servico.material WHERE id=$id"; 
$result_query = $mysqli->query($query);


header("Location: index.php");
?>