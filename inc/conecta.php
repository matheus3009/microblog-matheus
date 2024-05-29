<?php /* Script de conexão ao servidor de banco de dados
Necessário para que o Microblog possa usar o MySQL */


//parâmetros para conexão
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_matheus";


// Função para conexão com o servidor de banco de dados
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//definindo o chaset da conexãp para utf8
mysqli_set_charset($conexao, "utf8");

/*  Fazendo um teste de conexão  */
/* if( !$conexao ){
    // deu ruim fecha a aplicação
    die( "vishhh:" .mysqli_connect_error());
} else {
    echo "entra ai";
} */

?>