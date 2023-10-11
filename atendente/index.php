<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT * FROM servico.atendente"; 
$result_query = $mysqli->query($query);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar atendentes</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Listar atendentes <a href="cadastro.php"><img  src="../img/novo.png"></a> <a href="../"><img  src="../img/voltar.png"></a></h1>
    <!-- Tabela de listagem aqui -->

    <table >
        <thead>
            <tr>
                <th>Nome</th>
                <th>cpf</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<tr>";
                print "<td>" . $row['nome'] . "</td>";
                print "<td>" . $row['cpf'] . "</td>";
                print "<td>" . $row['endereco'] . "</td>";
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
