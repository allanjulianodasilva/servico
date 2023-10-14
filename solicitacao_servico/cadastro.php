<?php
include('../database.php');
?>
<!-- cadastro.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de solicitacao_servico</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8">
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>Cadastro de solicitacao_servico</h1>
    <form action="processar_cadastro.php" method="POST">
    numero_identificacao: <input type="text" name="numero_identificacao"  required><br>
     data_solicitacao: <input type="text" name="data_solicitacao" required ><br>
     data_inicio: <input type="text" name=" data_inicio" value required><br>
     data_termino: <input type="text" name="data_termino" required><br>
     cliente:
     <select name="cliente">
        <?php 
            $query = "SELECT * FROM servico.cliente"; 
            $result_query = $mysqli->query($query);
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
            }
        ?>
    </select><br>
     tecnico:
     <select name="tecnico">
        <?php 
            $query = "SELECT * FROM servico.tecnico"; 
            $result_query = $mysqli->query($query);
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
            }
        ?>
    </select><br>
     atentente: 
     <select name="atendente">
        <?php 
            $query = "SELECT * FROM servico.atendente"; 
            $result_query = $mysqli->query($query);
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
            }
        ?>
    </select><br>
        <input type="submit" value="Cadastrar">
        <button onclick="window.history.go(-1); return false;">voltar</button>
    </form>
</body>
</html>
