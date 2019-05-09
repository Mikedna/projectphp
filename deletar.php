<?php
$raca = $_GET['raca'];
require_once('conexao.php');
$sql = "DELETE FROM PET WHERE RACA = $raca";
$r = mysqli_query($con, $sql);
if($r){
    echo "Deletado com sucesso";
}else{echo "Erro ao deletar";}
?>