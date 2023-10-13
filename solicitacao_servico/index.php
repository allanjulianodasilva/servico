<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT * FROM servico.solicitacao_servico"; 
$result_query = $mysqli->query($query);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar solicitacao_servico</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Listar solicitacao_servicos <a href="cadastro.php"><img  src="../img/novo.png"></a> <a href="../"><img  src="../img/voltar.png"></a></h1>
    <!-- Tabela de listagem aqui -->

    <table >
        <thead>
            <tr>
                <th> numero_identificacao </th>
                <th>solicitacao </th>
                <th>inicio </th>
                <th>termino</th>
                <th>cliente </th>
                <th>tecnico </th>
                <th>atentente </th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<tr>";
                print "<td>" . $row['numero_identificacao'] . "</td>";
                print "<td>" . $row['data_solicitacao'] . "</td>";
                print "<td>" . $row['data_inicio'] . "</td>";
                print "<td>" . $row['data_termino'] . "</td>";
                print "<td>" . $row['cliente'] . "</td>";
                print "<td>" . $row['tecnico'] . "</td>";
                print "<td>" . $row['atentente'] . "</td>";
                print "<td>";
                print "<a href='alterar.php?id=".$row['id']."' >alterar</a> ";
                print "<a href='excluir.php?id=".$row['id']."' >excluir</a>";
                print "</td>";
                print "</tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
