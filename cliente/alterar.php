<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM serviço.cliente WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$acervo = $result_query->fetch_assoc();

if ($row > 0){
  $nome = $cliente['nome'];
  $cpf = $cliente['cpf'];
  $endereco = $cliente['endereco'];
  $telefone = $cliente['telefone'];
}

# Executa a query desejada 
$query = "SELECT * FROM livraria.editora"; 
$result_query = $mysqli->query($query);

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar cliente</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>Alterar cliente</h1>
    <form action="processar_alteracao.php" method="POST">
        nome: <input type="text" name="nome" value="<?php echo $nome ?>" required><br>
        cpf: <input type="text" name="cpf" value="<?php echo $cpf ?>" ><br>
        endereco: <input type="text" name="endereco" value="<?php echo $endereco ?>" required><br>
        telefone: <input type="text" name="telefone" value="<?php echo $telefone ?>" required><br>
        
        <select name="editora_id">
            <?php 
                while ($row = mysqli_fetch_array( $result_query )) { 
                    print "<option value='" . $row['id'] . "'";
                    if ($row['id']==$editora_id) print " selected ";
                    print">" . $row['nome'] . "</option>";
                }
            ?>
        </select><br><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
