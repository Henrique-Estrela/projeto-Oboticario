        <?php
            
            function cadastrar($dados){

                include "_scripts/config.php";

                $nome = $dados['nome'];
                $dt_Cadastro = $dados['dt_Cadastro'];
                $fornecedor = $dados['fornecedor'];
                $codigoBarra = $dados['codigoBarra'];
                $valor = $dados['valor'];
                $custo = $dados['custo'];
                $qntd = $dados['qntd'];

                $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro,codigo_barra,quantidade) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro','$codigoBarra',$qntd)";
                $query = $mysqli->query($sql);

                return $query;

            }
            //validação se ja foi 

            // function cadastro_produto($nome){
            //     include "config.php";
            //     $sql = "SELECT nome FROM cad_Produto WHERE nome='$nome'";
            //     $query = $mysqli->query($sql);
            //     $total = mysqli_num_rows($query);
            //     return $total;
            // }  

        ?>


    