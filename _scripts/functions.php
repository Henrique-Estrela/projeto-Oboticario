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


?>