<?php
include "conexao.php";
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
   if(isset($_POST['login']))
    {
        $login = mysqli_num_rows(mysqli_query($con, "SELECT * FROM dadoslogin WHERE usuario='$usuario' AND senha='$senha'"));
        if($login != 0)
            echo "success";
        else
            echo "error";
    }
    mysqli_close($con);
?>
