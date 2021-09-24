<?php 
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: ../front-end/index.php');
    exit();
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM dadoslogin WHERE usuario = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: ../front-end/quartos.php');
    exit();

} else{
    header('Location: ../front-end/cadastroLoginProfissional.php');
    exit();
}
?>