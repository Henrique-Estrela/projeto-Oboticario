<html lang="pt-br">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <?php
  function cadastro_produto($codigoBarra){
    include "config.php";
    $sql = "SELECT * FROM cad_Produto WHERE codigoBarra='$codigoBarra'";
    $query = $mysqli->query($sql);
    $total = mysqli_num_rows($query);
    return $total;
}  
include "config.php";
            

$nome = $_POST['nome'];
$dt_Cadastro = $_POST['dt_Cadastro'];
$fornecedor = $_POST['fornecedor'];
$codigoBarra = $_POST['codigoBarra'];
$valor = $_POST['valor'];
$custo = $_POST['custo'];
$qntd = $_POST['qntd'];

          

if(cadastro_produto($codigoBarra)==0){

    $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro,codigo_barra,quantidade) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro','$codigoBarra',$qntd)";
    $query = $mysqli->query($sql);
  
  ?>

  <script language='javascript'>
    Swal.fire({
    title: 'Salvo com sucesso meu patrão.',
    width: 600,
    padding: '3em',
    color: '#716add',
    background: '#fff url(/images/trees.png)',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://i.gifer.com/origin/51/518532f622d962be53e2e1f8989263a8_w200.gif")
      left top
      no-repeat
    `
    })
  </script>
  <?php } else{?>
  
  <script language='javascript'>
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Amigão, ce já fez o cadastro pae!',
    backdrop: `
      rgba(0,0,123,0.4)
      url("https://i.gifer.com/origin/51/518532f622d962be53e2e1f8989263a8_w200.gif")
      left top
      no-repeat
    `
  })
  
  </script>
  <?php 
  }
?>

    </body>
</html>
