<?php
require_once "..inc/funcoes-sessao.php";
require_once "../inc/funcoes-usuarios.php";
// Obter o id do usuário que será excluído

verificaAcesso();
verificaNivel();

// Chamar/executar a função que irá fazer o DELETE
$id = (int)$_GET['id'];
// Redirecionar para a página de usuários
excluirUsuario($conexao, $id);

header("location:usuarios.php");


?>