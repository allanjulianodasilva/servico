<?php

include('../database.php');

$id= $_GET['id'];

$query = "SELECT * FROM servico.Solicitacao_servico WHERE id=$id"; 
$result_query = $mysqli->query($query);


$row = $result_query->num_rows;
$solicitacao_servico = $result_query->fetch_assoc();

if ($row > 0){
    $numero_identificacao  = $solicitacao_servico['numero_identificacao'];
    $data_solicitacao = $solicitacao_servico['data_solicitacao'];
    $data_inicio = $solicitacao_servico['data_inicio'];
    $data_termino = $solicitacao_servico['data_termino'];
    $cliente = $solicitacao_servico['cliente'];
    $tecnico = $solicitacao_servico['tecnico'];
    $atentente = $solicitacao_servico['atentente'];
   ;
}

?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Alterar solicitacao_servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>alterar solicitacao_servico</h1>
    <form action="processar_alteracao.php" method="POST">
     numero_identificacao: <input type="text" name=" numero_identificacao" value="<?php echo $numero_identificacao ?>" required><br>
     data_solicitacao: <input type="text" name=" data_solicitacao" value="<?php echo  $data_solicitacao ?>" ><br>
     data_inicio: <input type="text" name="data_inicio" value="<?php echo $data_inicio  ?>" required><br><br>
     data_termino: <input type="text" name="data_termino" value="<?php echo $data_termino  ?>" ><br>
     cliente: 
     <select name="cliente">
            <?php 
                $query = "SELECT * FROM servico.cliente"; 
                $result_query = $mysqli->query($query);
            
                while ($row = mysqli_fetch_array( $result_query )) { 
                    print "<option value='" . $row['id'] . "'";
                    if ($row['id']==$cliente) print " selected ";
                    print">" . $row['nome'] . "</option>";
                }
            ?>
        </select><br><br>
     tecnico: <input type="text" name="tecnico" value="<?php echo $tecnico  ?>" ><br>
     
     atentente: <input type="text" name="atentente" value="<?php echo $atentente ?>" ><br>
     
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Alterar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
        
        
    </form>
</body>
</html>
