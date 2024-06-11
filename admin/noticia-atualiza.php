<?php
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcoes-noticias.php";



// Capturando o id a notícia
$idNoticia = $_GET['id'];

// Capturando o id do usuário logado 
$idUsuario = $_SESSION['id'];

// Capturando o tipo do usuário logado
$tipoUsuario = $_SESSION['tipo'];

// Chamando a função e recuperar os dados da notícia
$dadosNoticia = lerUmaNoticia(
    $conexao, $idNoticia, $idUsuario, $tipoUsuario
);

if(isset($_POST['atualizar'])){
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $resumo = $_POST['resumo'];

    /* Lógica para a imagem */

    /*  Se o o campo "imagem" estiver vazio, então significa que o usuário NÃO QUER  trocar de imagem. Neste caso, o sistema vai manter a "imagem existente". */
    if(empty($_FILES['imagem']['name'])){
        $imagem = $_POST['imagem-existente'];
    } else {
        /* Caso contrário, então pegamos a referência do novo arquivo (nome e extensão) e fazemos o processo de upload. */
        $imagem = $_FILES['imagem']['name']; //pegando o nome
        upload($_FILES['imagem']); // fazendo upload/envio
    }

    atualizarNoticia($conexao, $titulo, $texto, $resumo, $imagem, $idNoticia, $idUsuario, $tipoUsuario);

    header("location:noticias.php");
}
?>

<div class="row">
    <article class="col-12 bg-white rounded shadow my-1 py-4">

        <h2 class="text-center">
            Atualizar dados da notícia
        </h2>

        <form enctype="multipart/form-data" autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

            <div class="mb-3">
                <label class="form-label" for="titulo">Título:</label>
                <input value="<?=$dadosNoticia['titulo']?>" class="form-control" required type="text" id="titulo" name="titulo">
            </div>

            <div class="mb-3">
                <label class="form-label" for="texto">Texto:</label>

                <textarea class="form-control" required name="texto" id="texto" cols="50" rows="6"><?=$dadosNoticia['texto']?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label" for="resumo">Resumo (máximo de 300 caracteres):</label>
                <span id="maximo" class="badge bg-danger">0</span>
                <textarea class="form-control" required name="resumo" id="resumo" cols="50" rows="2" maxlength="300"><?=$dadosNoticia['resumo']?></textarea>
            </div>

            <div class="mb-3">
                <label for="imagem-existente" class="form-label">Imagem da notícia:</label>
                <!-- campo somente leitura, meramente informativo -->
                <input value="<?=$dadosNoticia['imagem']?>" class="form-control" type="text" id="imagem-existente" name="imagem-existente" readonly disabled>
            </div>

            <div class="mb-3">
                <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>
                <input class="form-control" type="file" id="imagem" name="imagem" accept="image/png, image/jpeg, image/gif, image/svg+xml">
            </div>

            <button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
        </form>

    </article>
</div>


<?php
require_once "../inc/rodape-admin.php";
?>