<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM servico.servico WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$servico = $result_query->fetch_assoc();

if ($row > 0){
    $numero_identificacao = $servico['numero_identificacao'];
    $descricao = $servico['descricao'];
    $valor = $servico['valor'];
    $solicitacao_servico = $servico['solicitacao_servico'];
   ;
}

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>alterar servico</h1>
    <form action="processar_alteracao.php" method="POST">
     numero_identificacao: <input type="text" name="numero_identificacao" value="<?php echo $numero_identificacao ?>" required><br>
     descricao: <input type="text" name="descricao" value="<?php echo  $descricao ?>" ><br>
     valor: <input type="text" name="valor" value="<?php echo $valor ?>" required><br>
     solicitacao_servico: 
     <select name="solicitacao_servico">
            <?php 
                $query = "SELECT * FROM servico.solicitacao_servico"; 
                $result_query = $mysqli->query($query);
            
                while ($row = mysqli_fetch_array( $result_query )) { 
                    print "<option value='" . $row['id'] . "'";
                    if ($row['id']==$numero_identificacao) print " selected ";
                    print">" . $row['numero_identificacao'] . "</option>";
                }
            ?>
        </select><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
        
        
    </form>
</body>
</html>
