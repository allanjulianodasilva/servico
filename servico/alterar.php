<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM servico.servico WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$servico = $result_query->fetch_assoc();

if ($row > 0){
    $numero_indentificacao = $servico['numero_indentificacao'];
    $descricao = $servico['descricao'];
    $valor = $servico['valor'];
    $solicitacao = $servico['solicitaçao'];
   ;
}

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>alterar servico</h1>
    <form action="processar_alteracao.php" method="POST">
     numero_indentificacao: <input type="text" name="numero_indentificacao" value="<?php echo $numero_indentificacao ?>" required><br>
     descricao: <input type="text" name="descricao" value="<?php echo  $descricao ?>" ><br>
     valor: <input type="text" name="valor" value="<?php echo $valor ?>" required><br><br>
     solicitacao: <input type="text" name="solicitacao" value="<?php echo $solicitacao ?>" ><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
        
        
    </form>
</body>
</html>
