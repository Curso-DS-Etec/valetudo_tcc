<?php 
include('conexao.php');

if(empty($_POST['usuarioProfissional']) || empty($_POST['senhaProfissional'])){
    header('location: ../front-end/index.php');
    exit();
}

$usuario = $_POST['usuarioProfissional'];
$senha = $_POST['senhaProfissional'];

$query = "SELECT * FROM dadoslogin WHERE username = '$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuarioProfissional'] = $usuario;
    header('Location: ../front-end/quartos.php');
    exit();

} else{
    header('Location: ../front-end/cadastroLoginProfissional.php');
    exit();
}
?>