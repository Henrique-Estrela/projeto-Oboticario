<?php

    function cadastrar($dados){

        include "_scripts/config.php";

        $nome = $dados['nome'];
        $dt_Cadastro = $dados['dt_Cadastro'];
        $codigo = $dados['codigo'];
        $fornecedor = $dados['fornecedor'];
        $valor = $dados['valor'];
        $custo = $dados['custo'];

        $sql = "INSERT INTO cadProduto (aluno,codigo,fornecedor,valor,custo,dt_Cadastro) VALUES ('$nome','$codigo','$fornecedor','$valor','$custo','$dt_Cadastro')";
        $query = $mysqli->query($sql);

        return $query;



        
    }


?>