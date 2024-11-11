<?php
require 'conexao2.php';
require 'Usuario.class.php';

if (isset($_POST['idusuario'], $_POST['nome'], $_POST['cpf_cnpj'], $_POST['senha'], $_POST['situacao'])) {
    $u = new Usuario();

    $idusuario = (int)$_POST['idusuario'];
    $nome = addslashes($_POST['nome']);
    $cpf_cnpj = addslashes($_POST['cpf_cnpj']);
    $senha = addslashes($_POST['senha']);
    $situacao = (int)$_POST['situacao'];

    if ($u->update($idusuario, $nome, $cpf_cnpj, $senha, $situacao)) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar usuário.";
    }
} else {
    echo "Preencha todos os campos.";
}
?>
