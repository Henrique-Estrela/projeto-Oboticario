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

                $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro,codigo_barra,quantidade) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro','$codigoBarra','$qntd')";
                $query = $mysqli->query($sql);

                return $query;

            }
            
            function cadastrar_venda($dados){

                include "_scripts/config.php";

                $dt_venda = $dados['dt_venda'];
                $codigoBarraP = $dados['codigoBarraP'];
                $qntdP = $dados['qntdP'];
                $Produto = $dados['Valor_Produto'];
                $venda = $dados['Valor_venda'];
                

                $sql = "INSERT INTO consulta_venda (data_venda,cod_produto,valor_venda,valor_produto,qtde_comprada)VALUES ('$dt_venda','$codigoBarraP','$qntdP','$Produto','$venda')";
                $query = $mysqli->query($sql);

                return $query;

            }
            function user($dados){

                include "_scripts/config.php";

                $user = $dados['user'];
                $senha = $dados['senha'];
                

                $sql = "INSERT INTO dados_user (nome,tipo) VALUES ('$user','$senha')";
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


    