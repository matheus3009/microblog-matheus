<?php
require_once "../inc/cabecalho-admin.php";
require_once "../inc/funcoes-usuarios.php";




verificaAcesso();

$id = $_SESSION['id'];



$dadosUsuario = lerUmUsuario($conexao, $id);



		
if(isset($_POST['atualizar'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	  
	$tipo = $_SESSION['tipo'];
	

	
	if( empty($_POST['senha']) || 
		password_verify($_POST['senha'], $dadosUsuario['senha']) ){


		$senha = $dadosUsuario['senha'];
	} else {

		$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	}

	atualizarUsuario($conexao, $id, $nome, $email, $senha, $tipo);
	

	$_SESSION['nome'] = $nome;

	header("location:index.php");
}



?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar meus dados
		</h2>
				
		<form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input value="<?=$dadosUsuario['nome']?>" class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input value="<?=$dadosUsuario['email']?>" class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

