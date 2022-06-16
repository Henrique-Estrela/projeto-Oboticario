<form class="row g-3" method="post" action="">
  <div class="col-md-6">
    <label  class="form-label">Nome do Produto</label>
    <input type="text" class="form-control" name="nome" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Data de Cadastro</label>
    <input type="date" class="form-control" name="dt_Cadastro" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Codigo do Produto</label>
    <input type="text" class="form-control" name="codigoBarra" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Quantidade</label>
    <input type="number" class="form-control" name="qntd" required>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Fornecedor</label>
    <input type="text" class="form-control" name="fornecedor" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Valor</label>
    <input type="number" class="form-control" name="valor" required>
  </div>
  <div class="col-md-6">
    <label class="form-label">Custo</label>
    <input type="number" class="form-control" name="custo" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
<?php include "_scripts/functions.php"; ?>

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
            <th style="text-align:center">Valor venda</th>
            <th style="text-align:center">#</th>
            <th style="text-align:center">#</th>
          </tr>
        </thead>
        <tbory  id="caixa">
          <?php 
            include "_scripts/config.php";
            $sql = "SELECT * FROM devlso03_eriksenai";
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
            <td style="text-align:center">
              <a href="_scripts/">
                <i class="fa-solid fa-file-pen"></i>
              </a>
            </td>
            <td style="text-align:center">
              <a href="_scripts/deletar.php?id= .<?php echo $dados ['id']; ?>">
                <i class="fa-solid fa-trash-can"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbory>
      </table>
    </div>
  </div>

</section>

