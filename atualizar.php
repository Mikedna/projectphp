<?php
$raca = $_POST['n'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
include_once('conexao.php');
$sql = "UPDATE PET SET NOME = '$nome', SEXO = '$sexo' WHERE RACA = $raca ";
$r = mysqli_query($con, $sql);
if($r){
    echo "Dados atualizado com sucesso";
}else{
    echo "Erro ao atualizar";
}
?>