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
            <th style="text-align:center">Nome</th>
            <th style="text-align:center">Codigo de Barras</th>
            <th style="text-align:center">Quantidade</th>
            <th style="text-align:center">Fornecedor</th>
            <th style="text-align:center">Valor de Venda</th>
            <th style="text-align:center">Valor de Custo</th>
            <th style="text-align:center">Data de Cadastro</th>
            <th style="text-align:center">#</th>
            <th style="text-align:center">#</th>

          </tr>
        </thead>
        <tbory  id="caixa">
          <?php 
            include "_scripts/config.php";
            $sql = "SELECT * FROM cad_produto";
            $query = $mysqli ->query($sql);
            while ($dados = $query ->fetch_array()){

          ?>
          <tr>
            <td style="text-align:center"><?php echo $dados ['id']; ?></td>
            <td style="text-align:center"><?php echo $dados ['nome_produto']; ?></td>
            <td style="text-align:center"><?php echo $dados ['codigo_barra']; ?></td>
            <td style="text-align:center"><?php echo $dados ['quantidade']; ?></td>
            <td style="text-align:center"><?php echo $dados ['fornecedor']; ?></td>
            <td style="text-align:center"><?php echo $dados ['valor_venda']; ?></td>
            <td style="text-align:center"><?php echo $dados ['custo_produto']; ?></td>
            <td style="text-align:center"><?php echo $dados ['data_cadastro']; ?></td>
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
