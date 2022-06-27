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
                

                $sql = "INSERT INTO consulta_venda (data_venda,cod_produto,valor_venda,valor_produto,qtde_comprada) VALUES ('$dt_venda','$codigoBarraP','$venda','$Produto','$qntdP')";
                $query = $mysqli->query($sql);

                return $query;

            }
            function user($dados){

                include "_scripts/config.php";

                $user = $dados['user'];
                $senha = $dados['senha'];
                $tipo = $dados['tipo'];
                

                $sql = "INSERT INTO dados_user (nome,senha,tipo) VALUES ('$user','$senha','$tipo')";
                $query = $mysqli->query($sql);

                return $query;

            }
            function dados1(){
                include "_scripts/config.php";
                
                $sql = "SELECT id FROM dados_user";
                $query = $mysqli ->query($sql);
                $dados = $query ->num_rows;
                return $dados;
            }
            function dados2(){
                include "_scripts/config.php";
                
                $sql = "SELECT id FROM consulta_venda";
                $query1 = $mysqli ->query($sql);
                $dados1 = $query1->num_rows;
                return $dados1;
            }
            function dados3(){

                include "_scripts/config.php";
                
                $sql = "SELECT id FROM cad_produto";
                $query2 = $mysqli->query($sql);
                $dados2 = $query2 ->num_rows;
                return $dados2;
            }
            function dados4(){

                include "_scripts/config.php";
                
                $sql = "SELECT sum(valor_venda) as t FROM cad_produto";
                $query3 = $mysqli->query($sql);
                $dados3 = $query3 ->fetch_array();
                return $dados3['t'];
            }
            //mexer aqui
            function listarDisciplina(){
                include "_scripts/config.php";
                $sql = "SELECT * FROM cad_produto WHERE status = 'A'";
                $query = $mysqli ->query($sql);
            
                return $query;
            }

            //verificar se funciona
   
               

            // function cadastro_produto($codigoBarra){
            //     include "config.php";
            //     $sql = "SELECT codigoBarra FROM cad_Produto WHERE codigoBarra='$codigoBarra'";
            //     $query = $mysqli->query($sql);
            //     $total = mysqli_num_rows($query);
            //     return $total;
            // }  

        
             function delete($id) {
                include '_scripts/config.php';
                 $id = $id['id'];
                 $sql = "DELETE FROM cad_Produto WHERE id = $id";
                 mysqli_query($mysqli,$sql);
                 return $id;
            
            } ?>

           

     
