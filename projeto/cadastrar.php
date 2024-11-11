<?php
require 'conexao2.php';
require 'Usuario.class.php';

if (isset($_POST['nome'], $_POST['cpf_cnpj'], $_POST['senha'], $_POST['situacao'])) {
    $u = new Usuario();

    $nome = addslashes($_POST['nome']);
    $cpf_cnpj = addslashes($_POST['cpf_cnpj']);
    $senha = addslashes($_POST['senha']);
    $situacao = (int)$_POST['situacao'];

    if ($u->create($nome, $cpf_cnpj, $senha, $situacao)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
} else {
    echo "Preencha todos os campos.";
}
?>
