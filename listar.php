<!DOCTYPE html>
<html>
<head>    
    <title>Animais</title>  
    <meta charset="UTF-8">  
</head>
<body>
    <?php include_once('index.php');  ?>
<table border="1px" align="center">
    <tr align="center">
        <td>Raça:</td>
        <td>Nome:</td>
        <td>Sexo:</td>
        <td>Deletar:</td>
        <td>Editar:</td>
    <tr>
<?php 
include_once('conexao.php');
$sql = "SELECT * FROM PET";
$r = mysqli_query($con, $sql);
if($r){
    while($result = mysqli_fetch_array($r)){?>
        <tr align="center">
            <td><?php echo $result['raca']; ?></td>
            <td><?php echo $result['nome'];?></td>
            <td><?php echo $result['sexo'];?></td>
            <td><a href="deletar.php?raca=<?php echo $result['raca']; ?> "> <img src="01.gif"></a></td>
            <td><a href="editar.php?raca=<?php echo $result['raca']; ?> &nome=<?php echo $result['nome'] ?>&sexo=<?php echo $result['SEXO'];?>"> <img src="02.png" width="23px"></a></td>
        </tr>
        <?php
    }
}
?>
</table>  
</body>
</html>