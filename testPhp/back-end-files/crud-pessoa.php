<?php
    require_once('./conexao.php');

    #vai retornar true se cadastrar e false se ocorrer uma falha
    function fnAddPessoa($cpf, $nome, $idade){
        $link = getConnection();

        $query = "insert into pessoa(cpf,nome,idade)values('{$cpf}', '{$nome}', {$idade})";

        #mysqli_query executa a query no banco
        #retorna true|false - false quando tem erros e true quando não tem erros
        #! nega um valor booleano, ou seja, inverte o valor true vira false e false vira true

        if(!mysqli_query($link, $query)){
            throw new \Exception ("Error ao gravar no banco", 1);
            return false;
        }
        return true;
    }

