
<?php
include("conexao.php");

$varUsuario = $_POST["usuarioProfissional"]; 
$varSenha = $_POST["senhaProfissional"];


$query = mysqli_query($conexao, "SELECT * FROM dadosLogin WHERE username = '$varUsuario' AND senha = '$varSenha'");

if(mysqli_num_rows($query) == 1){
	header("location:../front-end/dashboard.php?id=".$varUsuario);	
} else {
	echo "Usuário ou senha inválidos";
}

?>