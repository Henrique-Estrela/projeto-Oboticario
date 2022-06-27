<?php 

$id = $_POST['id'];
$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$codigoBarra = $_POST['codigoBarra'];
$valor = $_POST['valor'];
$custo = $_POST['custo'];
$qntd = $_POST['qntd'];




include "config.php";
$edit_cad = "UPDATE cad_produto SET nome_produto = '$nome', fornecedor = '$fornecedor', valor_venda='$valor',custo_produto='$custo', codigo_barra='$codigoBarra', quantidade='$qntd' WHERE id= '$id'";
$resultado = mysqli_query($mysqli, $edit_cad);

$row = mysqli_num_rows($resultado);
if ($row != ""){
    header( "location : localhost/projeto_oboticario");
}

?>