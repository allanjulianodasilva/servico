<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM servico.material WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$material = $result_query->fetch_assoc();

if ($row > 0){
    $numero_identificacao = $material['numero_identificacao'];
    $descricao = $material['descricao'];
    $valor = $material['valor'];
   ;
}

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar material</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>alterar material</h1>
    <form action="processar_alteracao.php" method="POST">
     numero_identificacao: <input type="text" name="numero_identificacao" value="<?php echo $numero_identificacao ?>" required><br>
        descricao: <input type="text" name="descricao" value="<?php echo $descricao ?>" ><br>
        valor: <input type="text" name="valor" value="<?php echo $valor ?>" required><br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
        
        
    </form>
</body>
</html>
