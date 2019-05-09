<?php
include_once('index.php');
include_once('conexao.php');
$raca = $_POST['n'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
echo $raca . $nome . $sexo;
$sql = "INSERT INTO PET (raca, nome, sexo) VALUES ('$raca', '$nome', '$sexo')";
$r = mysqli_query($con, $sql);
if($r){
    echo "  Pet cadastrado com sucesso  " . $r;
}else{
    echo "  Erro ao cadastrar  " . $r;
}
?>