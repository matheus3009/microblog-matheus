<?php
require_once "../inc/funcoes-sessao.php";
require_once "../inc/funcoes-noticias.php";

/* vendo o tipo do usuário e funcionalidades */
verificaAcesso();

$idNoticia = (int)$_GET['id'];// pegando o id

$idUsuario = $_SESSION['id'];

$tipoUsuario = $_SESSION['tipo'];

excluirNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario);

header("location:noticias.php")

?>