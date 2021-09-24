<?php 
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: index.php');
    exit();
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM dadoslogin WHERE usuario = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: quartos.php');
    exit();

} else{
    header('Location: cadastroLoginProfissional.php');
    exit();
}
?>