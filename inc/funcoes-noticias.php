<?php
require "conecta.php";

function formataData($data){
    return date("d/m/Y H:i", strtotime($data));
}


/* Array para validação dos tipos permitidos */
function upload($arquivo)
{
    $tiposValidos = [
        "image/png", "image/jpeg", "image/gif", "image/svg+xml"
    ];

    /* Verificando se o tipo do arquivo NÃO É um dos existente no array tiposValidos */
    if (!in_array($arquivo['type'], $tiposValidos)) {
        echo "<script>
            alert('Formato inválido!');
            history.back();
        </script>";
        exit;
    }

    /* Pegandp apenas o nome/extensão do arquivo */
    $nome = $arquivo['name'];

    /* Obtendo do servidor o local/nome temporário para o processo de upload */
    $temporario = $arquivo['tmp_name'];

    /* definindo da pasta de destino + nome do arquivo da imagem */
    $destino = "../imagens/" . $nome;

    /* Movendo o arquivo/imagem da área temporária para a pasta de destino indicada (imagens) */
    move_uploaded_file($temporario, $destino);
}
function inserirNoticia($conexao, $titulo, $texto, $resumo, $nomeImagem, $usuarioId)
{
    $sql = "INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id) VALUES(
        '$titulo', '$texto', '$resumo', '$nomeImagem', '$usuarioId'
    )";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function lerNoticias($conexao, $idUsuario, $tipoUsuario){

    if($tipoUsuario == 'admin'){
        // Admin pode ver TUDO
        $sql = "SELECT
        noticias.id,
        noticias.titulo, 
        noticias.data,
        usuarios.nome
        FROM noticias JOIN usuarios
        ON noticias.usuario_id = usuarios.id 
        ORDER BY data DESC";
    } else {
        // Editor pode ver SOMENTE o DELE/DELA
        $sql = "SELECT titulo, data, id FROM noticias WHERE usuario_id = $idUsuario ORDER BY data DESC";
    }


    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

function lerUmaNoticia($conexao, $idNoticia, $idUsuario, $tipoUsuario)
{
    if ($tipoUsuario == 'admin') {
        // pode carregar/ver qualquer notícia
         $sql = "SELECT * FROM noticias WHERE id = $idNoticia";
   
    } else {
         // Pode carregar/var SOMENTE SUA notícia  
         $sql = "SELECT * FROM noticias WHERE id = $idNoticia AND usuario_id = $idUsuario";
    }
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    return mysqli_fetch_assoc($resultado);
}

function atualizarNoticia($conexao, $titulo, $texto, $resumo, $imagem, $idNoticia, $idUsuario, $tipoUsuario)
{
    if ($tipoUsuario == 'admin') {
        /*  Pode atualizar QUALQUER notícia (basta saber qual) */
        $sql = "UPDATE noticias SET
         titulo = '$titulo',
         texto = '$texto',
         resumo = '$resumo',
         imagem = '$imagem'
         WHERE id = $idNoticia"; // prerigo!!!💀💀
        
        
        
        
        ;
      
    } else {
      /* Pode atualizar SOMENTE suas notícias */
          $sql = "UPDATE noticias SET
          titulo = '$titulo',
          texto = '$texto',
          resumo = '$resumo',
          imagem = '$imagem'
          WHERE
             id = $idNoticia AND usuario_id = $idUsuario"; // prerigo!!!💀💀";
    }
    
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function excluirNoticia($conexao, $id)
{
    $sql = "DELETE FROM noticias WHERE id = $id";

    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
