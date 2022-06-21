<?php 

$id = $_POST['id'];
$nome = $_POST['nome'];
$dt_Cadastro = $_POST['dt_Cadastro'];
$fornecedor = $_POST['fornecedor'];
$codigoBarra = $_POST['codigoBarra'];
$valor = $_POST['valor'];
$custo = $_POST['custo'];
$qntd = $_POST['qntd'];




include "config.php";
$edit_cad = "UPDATE cad_produto SET nome_produto = '$nome' WHERE id= '$id'";
$resultado = mysqli_query($mysqli, $edit_cad);

$row = mysqli_num_rows($resultado);
if ($row != ""){
    header( "location : localhost/projeto_oboticario");
}

?>