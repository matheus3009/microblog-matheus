<?php
require "inc/cabecalho.php";
require "inc/funcoes-noticias.php";

$listaDeNoticias = lerTodasNoticias($conexao);
?>


<div class="row my-1 mx-md-n1">

    <!-- INÍCIO Card -->
    <?php foreach ($listaDeNoticias as $noticia) { ?>

        <div class="col-md-6 my-1 px-md-1">
            <article class="card shadow-sm h-100">
                <a href="noticia.php?id=<?=$noticia['id']?>" class="card-link">
                    <img src="imagens/<?=$noticia['imagem']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h3 class="fs-4 card-title"><?=$noticia['titulo']?></h3>
                        <p class="card-text"><?=$noticia['resumo']?></p>
                    </div>
                </a>
            </article>
        </div>
        <!-- FIM Card -->
    <?php } ?>

</div>

<?php
require_once "inc/rodape.php";
?>