<?php
require_once "../inc/funcoes-sessao.php";
require_once "../inc/funcoes-noticias.php";

/* vendo o tipo do usuário e funcionalidades */
verificaAcesso();

$idNoticia = $_GET['id'];// pegando o id

excluirNoticia($conexao, $idNoticia);

header("location:noticias.php")

?>