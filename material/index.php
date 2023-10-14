<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT * FROM servico.material"; 
$result_query = $mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar material</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <?php include_once('../index.php');?>
    <h1>Listar material <a href="cadastro.php"><img  src="../img/novo.png"></a> <a href="../"><img  src="../img/voltar.png"></a></h1>
    <!-- Tabela de listagem aqui -->

    <table >
        <thead>
            <tr>
                <th>numero_identificacao</th>
                <th>descricao</th>
                <th>valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<tr>";
                print "<td>" . $row['numero_identificacao'] . "</td>";
                print "<td>" . $row['descricao'] . "</td>";
                print "<td>" . $row['valor'] . "</td>";
                print "<td>";
                print "<a href='alterar.php?id=".$row['id']."' >alterar</a> - ";
                print "<a href='excluir.php?id=".$row['id']."' >excluir</a>";
                print "</td>";
                print "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
