<?php

    function cadastrar($dados){

        include "_scripts/config.php";

        $nome = $dados['nome'];
        $dt_Cadastro = $dados['dt_Cadastro'];
        $fornecedor = $dados['fornecedor'];
        $valor = $dados['valor'];
        $custo = $dados['custo'];

        $sql = "INSERT INTO cad_Produto (nome_produto,fornecedor,valor_venda,custo_produto,data_cadastro) VALUES ('$nome','$fornecedor','$valor','$custo','$dt_Cadastro')";
        $query = $mysqli->query($sql);

        return $query;



        
    }


?>