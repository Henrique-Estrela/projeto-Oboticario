<div class="container-fluid">        
        <div class="row cards-intro">
            <div class="col-sm-3">
            <?php 
                include "_scripts/config.php";
                
                $sql = "SELECT count(id) as t FROM dados_user";
                $query = $mysqli ->query($sql);
                $dados = $query ->fetch_array();
            ?>

            <?php 
                include "_scripts/config.php";

                /*$sql = "SELECT * FROM consulta_venda order by id  desc";
                $query1 = $mysqli ->query($sql);
                $dados1 = $query1->fetch_array()*/
            ?>

            <?php 
                include "_scripts/config.php";

                /*$sql = "SELECT * FROM cad_produto order by id  desc";
                $query2 = $mysqli->query($sql);
                $dados2 = $query2 ->fetch_array()*/
            ?>


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dados['t']; ?></h5>
                        <p class="card-text">Funcionarios</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dados1 ['id']; ?></h5>
                        <p class="card-text">vendas</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dados2 ['id']; ?></h5>
                        <p class="card-text">produtos cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dados1 ['valor_venda']; ?></h5>
                        <p class="card-text">Vendidos</p>
                    </div>
                </div>
            </div>
            
        </div>        
    </div>
    
    <div class="container grafico">
        <h1>Mais vendidos</h1>
        <div class="grafico">
            <div id="chartdiv">
                <?php include "graf.php"; ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-sm-4 justify-content-center align-self-center">
                    <img src="_image/logo.png" width="50rem" class="logo">
                </div>
                <div class="col-sm-4 justify-content-center text-center align-self-center">
                    Endereço
                </div>
                <div class="col-sm-4 justify-content-center text-center align-self-center">
                    sdsds
                </div>
            </div>
        </footer>
    </div>