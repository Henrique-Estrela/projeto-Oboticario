<?php include "head.php"; ?>
<?php include "menu.php"; ?>

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

<?php include "js.php"; ?>
<?php include "footer.php"; ?>