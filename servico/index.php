<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT * FROM servico.atendente"; 
$result_query = $mysqli->query($query);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar servico</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Listar servico <a href="cadastro.php"><img  src="../img/novo.png"></a> <a href="../"><img  src="../img/voltar.png"></a></h1>
    <!-- Tabela de listagem aqui -->

    <table >
        <thead>
            <tr>
                <th> numero_identificacao </th>
                <th>cpf</th>
                <th>descricao </th>
                <th>valor </th>
                <th>solicitacao_servico </th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<tr>";
                print "<td>" . $row['numero_identificacao'] . "</td>";
                print "<td>" . $row['descricao'] . "</td>";
                print "<td>" . $row['valor'] . "</td>";
                print "<td>" . $row['solicitacao_servico'] . "</td>";
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
