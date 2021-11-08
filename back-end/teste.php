<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php
include("conexao.php");
?>

	

<?php

$varUsuario = $_POST["usuarioProfissional"]; 
$varSenha = $_POST["senhaProfissional"];


$query = mysqli_query($conexao, "SELECT * FROM dadosLogin WHERE username = '$varUsuario' AND senha = '$varSenha'");			
		if(mysqli_num_rows($query) == 1){?>
		<!-- // header("location:../front-end/dashboard.php?id=".$varUsuario .$varSenha); -->
		
		<!-- titulo da pagina -->
		<title>Logado como <?php echo $varUsuario; ?></title>
</head>
<body>

<h2>Bem vinda de Volta <?php echo$varUsuario ?></h2>

		<?php
		
		$query1 = mysqli_query($conexao, "SELECT * FROM dadosProfissional where nome = '$varUsuario' ");			
		while($exibe = mysqli_fetch_array($query1)){  ?>

		<table border="1">
			
				<thead>
					<tr>
						<td><b>Nome</b></td>
						<td><b>Sobrenome</b></td>
						<td><b>Telefone</b></td>
						<td><b>Celular</b></td>
						<td><b>Area de atuação</b></td>
						<td><b>Tempo de Atuação</b></td>
						<td><b>Possui certificado?</b></td>
					</tr>
				</thead>
		
		
		
		
		    	<tbody>
					<tr>
						<img src="../front-end/arquivos/" width="200" alt="">
						<td><?php echo $exibe[1] ?></td><br>
						<td><?php echo $exibe[2] ?></td><br>
						<td><?php echo $exibe[9] ?></td>
						<td><?php echo $exibe[10] ?></td><br>
						<td><?php echo $exibe[11] ?></td><br>
						<td><?php echo $exibe[12] ?></td><br>
						<td><?php echo $exibe[13] ?></td><br>
				   </tr>
			   </tbody>	
		</table>	 
		<?php } ?>
	
		<?php } ?>


</body>
</html>

