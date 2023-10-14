<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM servico.cliente WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$cliente = $result_query->fetch_assoc();

if ($row > 0){
    $nome = $cliente['nome'];
    $cpf = $cliente['cpf'];
    $endereco = $cliente['endereco'];
    $telefone = $cliente['telefone'];
}

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar cliente</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>alterar cliente</h1>
    <form action="processar_alteracao.php" method="POST">
     nome: <input type="text" name="nome" value="<?php echo $nome ?>" required><br>
        cpf: <input type="text" name="cpf" value="<?php echo $cpf ?>" ><br>
        endereco: <input type="text" name="endereco" value="<?php echo $endereco ?>" required><br><br>
        telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>" required><br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
        
        
    </form>
</body>
</html>
