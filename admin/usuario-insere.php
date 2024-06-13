<?php 
require_once "../inc/cabecalho-admin.php";

// Importando as funções de manipulação dos usuários
require_once "../inc/funcoes-usuarios.php";


 verificaNivel();
if (isset ($_POST['inserir'])) {
	// Capturando os dados digitados
	$nome = htmlspecialchars($_POST['nome']);
	$email =  htmlspecialchars($_POST['email']);
	$tipo =  htmlspecialchars($_POST['tipo']);

	//capturando a senha e codificando 
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

	echo $nome, $email, $tipo, $senha;

	// Chamando a função de inserir usuário e passando os dados
	inserirUsuario($conexao, $nome, $email, $tipo, $senha);

	header("location:usuarios.php");
}


?>




<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo usuário
		</h2>
				
		<form autocomplete="off" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="tipo">Tipo:</label>
				<select class="form-select" name="tipo" id="tipo" required>
					<option value=""></option>
					<option value="editor">Editor</option>
					<option value="admin">Administrador</option>
				</select>
			</div>
			
			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

