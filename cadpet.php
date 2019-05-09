<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro do Animal</title>   
</head>
<body>
    <?php include_once('index.php');  ?>
    <form action="salvar.php" method="POST" align="center"><br>
        Raça:<input type="text" name="n" size="20"><br>
        Nome:<input type="text" name="nome" id="nome" size="25" ><br>
        Sexo: <input type="radio" name="sexo" value="M">M <input type="radio" name="sexo" value="F">F<br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>