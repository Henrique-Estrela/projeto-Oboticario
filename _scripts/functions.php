<?php

    function cadastrar($dados){

        include "_scripts/config.php";

        $nome = $dados['nome'];
        $dt_nascimento = $dados['dt_nascimento'];
        $nome_mae = $dados['nome_mae'];
        $cpf = $dados['cpf'];
        $bairro = $dados['bairro'];
        $sexo = $dados['sexo'];

        $sql = "INSERT INTO cadaluno (aluno,mae,cpf,bairro,sexo,data_nascimento) VALUES ('$nome','$nome_mae','$cpf','$bairro','$sexo','$dt_nascimento')";
        $query = $mysqli->query($sql);

        return $query;



        
    }


?>