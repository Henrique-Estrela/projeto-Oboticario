        <?php
            
            function cadastrar($dados){

                include "_scripts/config.php";

                $nome = $dados['nome'];
                $dt_Cadastro = $dados['dt_Cadastro'];
                $fornecedor = $dados['fornecedor'];
                $valor = $dados['valor'];
                $custo = $dados['custo'];

<<<<<<< HEAD
                if(isset($_POST)){
    
                if(cadastro_produto($nome)==0){
                    $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro')";
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
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location.href="painel.php?r=home";
                        } else{
                        window.location.href="painel.php?r=home";
                        }
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
                    
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href="painel.php?r=home";
                    }
                    })
                    
                    </script>
                    <?php 
                    }}
            
=======
        $nome = $dados['nome'];
        $dt_Cadastro = $dados['dt_Cadastro'];
        $fornecedor = $dados['fornecedor'];
        $codigoBarra = $dados['codigoBarra'];
        $valor = $dados['valor'];
        $custo = $dados['custo'];
        $qntd = $dados['qntd'];

        $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro,codigo_barra,quantidade) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro','$codigoBarra',$qntd)";
        $query = $mysqli->query($sql);
>>>>>>> 45a13a492afa5b9dbc1eb827ae68f8ea29aa00ed

                

                return $query; 

                
            }
            function cadastro_produto($nome){
                include "config.php";
                $sql = "SELECT nome FROM cad_Produto WHERE nome='$nome'";
                $query = $mysqli->query($sql);
                $total = mysqli_num_rows($query);
                return $total;
            }

        ?>
<html lang="pt-br">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
    <?php

    