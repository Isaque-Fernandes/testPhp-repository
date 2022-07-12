<?php
    require_once('./crud-pessoa.php');

    if(fnAddPessoa($_POST['cpf'],$_POST['nome'],$_POST['idade'])){
        echo "Cadastrado com sucesso";

    }else{
        echo "Ocorreu um erro no cadastro";
    }