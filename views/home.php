<?php
include "protect.php";
?>

<div class="container-fluid">        
        <div class="row cards-intro">
            <div class="col-sm-3">
            

            <?php include "_scripts/functions.php";?>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo dados1(); ?></h5>
                        <p class="card-text">Funcionarios</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo dados2(); ?></h5>
                        <p class="card-text">vendas</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo dados3(); ?></h5>
                        <p class="card-text">produtos cadastrados</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo dados4(); ?></h5>
                        <p class="card-text">Faturados</p>
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