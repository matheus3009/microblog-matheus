<?php
require_once "inc/cabecalho.php"; 
require_once "inc/funcoes-sessao.php";
require_once "inc/funcoes-usuarios.php";


if (isset($_POST['entrar'])) {
	
	//validando os campos
	if (empty($_POST['email']) || empty($_POST['senha'])) {
		header("location:login.php?campos_obrigatorios");
	}

	// Capturando os dados digitados
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	/* 1) Buscnfdo no banco de dados, através do e-mail digitado, se existe um usuário cadastrado. */

	$usuario = buscarUsuario($conexao, $email);

	echo "<pre>";
	var_dump($usuario);
	echo "</pre>";
}
?>

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
    <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">

				<p class="my-2 alert alert-warning text-center">
					Mensagens de feedback...
				</p>                

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>

    </div>
    
    
</div>        

<?php 
require_once "inc/rodape.php";
?>

