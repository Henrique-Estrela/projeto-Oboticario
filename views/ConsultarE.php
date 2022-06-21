<section id="listar_clientes">
<script>
  function deletardados(id) {
    var id = id


    $.ajax({
            url: "http://localhost/GitHub/projeto-Oboticario/_scripts/delete.php",
            type: "POST",
            data: {
                id: id
            },
        })
        .done(function(result) {
                console.log(result);
                $("#resultadocompleto").html(result);
            }

        )
        .fail(function(msg) {
            alert(msg);
        })






};
</script>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3></h3>

      </div>
    </div>
  </div>
  <h1>Consulta de Estoque</h1>
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
              <a href="views/edicao.php?id=<?php echo $dados['id'] ?>" onclick="">
                <i class="fa-solid fa-file-pen"></i>
              </a>
            </td>
            <td style="text-align:center">
             <a> <button onclick="deletardados(<?php echo $dados['id']; ?>)">   
                <i class="fa-solid fa-trash-can"></i>
                </button> </a>
            </td>
          </tr>
          <?php } ?>
        </tbory>
      </table>
    </div>
  </div>
<div id='resultadocompleto'></div>
</section>
