<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT acervo.*, editora.nome FROM livraria.acervo JOIN livraria.editora ON editora.id=acervo.editora_id"; 
$result_query = $mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listar acervo</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <h1>Listar acervo <a href="cadastro.php"><img  src="../img/novo.png"></a> <a href="../"><img  src="../img/voltar.png"></a></h1>
    
    <!-- Tabela de listagem aqui -->

    <table >
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>ano publicaçao</th>
                <th>Editora</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_array( $result_query )) { 
                print "<tr>";
                print "<td>" . $row['titulo'] . "</td>";
                print "<td>" . $row['autor'] . "</td>";
                print "<td>" . $row['ano_publicacao'] . "</td>";
                print "<td>" . $row['nome'] . "</td>";
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
