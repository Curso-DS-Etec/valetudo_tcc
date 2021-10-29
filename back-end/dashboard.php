<?php
include("../back-end/conexao.php");

$varUsuario = $_GET["id"];

$query = mysqli_query($conexao,"SELECT * FROM dadosLogin WHERE username = '$varUsuario'" );
while($exibe = mysqli_fetch_array($query)){
	
?>

<?php echo $exibe[1] ?><br>
<?php echo $exibe[2] ?><br>
<?php echo $exibe[3] ?><br>
<?php echo $exibe[7] ?><br>

<?php } ?>


<a href="../back-end/logout.php">Sair</a>