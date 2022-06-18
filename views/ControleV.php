<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
</head>
<body>
  


<div class="container-fluid form-aluno">
<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome do Produto</label>
    <input type="text" class="form-control" name="nomeProduto" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Data da venda</label>
    <input type="date" class="form-control" name="dt_venda" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Codigo do Produto</label>
    <input type="text" class="form-control" name="codigoBarraP" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Quantidade</label>
    <input type="number" class="form-control" name="qntdP" required>
  </div>
  <div class="col-md-6">
    <label for="inputAddress2" class="form-label">Valor Produto</label>
    <input type="number" class="form-control" name="Valor_Produto" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Vender</button>
  </div>
</form>
</div>

<?php include "_scripts/functions.php"; 
if(!empty($_POST['user'])){

if(cadastrar_venda($_POST)){
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
  <?php }else{
   ?>
   <script>
     Swal.fire({
     icon: 'error',
     title: 'Oops...',
     text: 'Something went wrong!',
     footer: '<a href="">Why do I have this issue?</a>'
   })
   </script>
   <?php 
};
}

?>

<section id="listar_clientes">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3></h3>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <table class="table" id="mytable">
        <thead>
          <tr>
            <th style="text-align:center">ID</th>
            <th style="text-align:center">Data</th>
            <th style="text-align:center">Quantade</th>
            <th style="text-align:center">Codigo</th>
            <th style="text-align:center">Valor Produto</th>
            <th style="text-align:center">Valor venda</th>
          </tr>
        </thead>
        <tbory  id="caixa">
        <?php 
            include "_scripts/config.php";
            $sql = "SELECT * FROM consulta_venda";
            $query = $mysqli ->query($sql);
            while ($dados = $query ->fetch_array()){

          ?>
          <tr>
            <td style="text-align:center"><?php echo $dados ['id']; ?></td>
            <td style="text-align:center"><?php echo $dados ['data_venda']; ?></td>
            <td style="text-align:center"><?php echo $dados ['qtde_comprada']; ?></td>
            <td style="text-align:center"><?php echo $dados ['cod_produto']; ?></td>
            <td style="text-align:center"><?php echo $dados ['valor_produto']; ?></td>
            <td style="text-align:center"><?php echo $dados ['valor_venda']; ?></td>
          </tr>
          <?php } ?>
        </tbory>
      </table>
    </div>
  </div>

</section>

</body>
</html>