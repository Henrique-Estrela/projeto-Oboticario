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

            // function cadastro_produto($codigoBarra){
            //     include "config.php";
            //     $sql = "SELECT codigoBarra FROM cad_Produto WHERE codigoBarra='$codigoBarra'";
            //     $query = $mysqli->query($sql);
            //     $total = mysqli_num_rows($query);
            //     return $total;
            // }  
            

            // function deletar($id){
            //     $id = $id['id'];
            //     $sql = "DELETE FROM cad_Produto WHERE id = $id";
            //     return $id;
            // }
        ?>


    