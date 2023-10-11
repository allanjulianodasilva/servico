<!-- cadastro.html -->
<?php 
include('../database.php');

# Executa a query desejada 
$query = "SELECT * FROM livraria.editora"; 
$result_query = $mysqli->query($query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de acervo</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF8"
</head>
<body>
    <h1>Cadastro de acervo</h1>
    <form action="processar_cadastro.php" method="POST">
        titulo: <input type="text" name="titulo" required><br>
        autor: <input type="text" name="autor"><br>
        ano publicaçao: <input type="text" name="ano_publicacao" required><br>
        Editora: 
        <select name="editora_id">
            <?php 
                while ($row = mysqli_fetch_array( $result_query )) { 
                    print "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
