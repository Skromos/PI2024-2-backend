<?php
require 'conexao2.php';
require 'Usuario.class.php';

$u = new Usuario();
$usuarios = $u->read(); // Retorna todos os usuários

echo "<h1>Lista de Usuários</h1>";
foreach ($usuarios as $usuario) {
    echo "ID: " . $usuario['idusuario'] . " - Nome: " . $usuario['nome'] . " - CPF/CNPJ: " . $usuario['cpf_cnpj'] . "<br>";
}
?>
