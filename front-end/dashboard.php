<?php
 require("../back-end/conexao2.php");
    session_start();

    if(isset($_SESSION["username"]) && is_array($_SESSION["username"])){
        require("../back-end/conexao2.php");

        $adm  = $_SESSION["username"][1];
        $nome = $_SESSION["username"][0];
    }else{
        echo "<script>window.location = 'cadastroLoginProfissional'</script>";
    }
?>
<html>
    <head>
        <title>Dashboard Usuário - <?php echo $nome; ?></title>
    </head>
    <body>
        <?php if($adm): ?>
            <table width="40%">
                <thead>
                    <tr style="font-weight: bold">
                        <td>Email</td>
                        <td>Senha</td>
                        <td>Nome</td>
                        <td>ADM</td>
                        <td>ID</td>
                        <td>Username</td>
                    </tr>                
                </thead>
                <tbody>
                    <?php
                        $query = $con->prepare("SELECT * FROM dadosLogin");
                        $query->execute();
                
                        $users = $query->fetchAll(PDO::FETCH_ASSOC);

                        for($i = 0; $i < sizeof($users); $i++):
                            $usuarioAtual = $users[$i];
                    ?>
                    <tr>
                        <td><?php echo $usuarioAtual["email"]; ?></td>
                        <td><?php echo $usuarioAtual["senha"]; ?></td>
                        <td><?php echo $usuarioAtual["nome"]; ?></td>
                        <td><?php echo $usuarioAtual["adm"]; ?></td>
                        <td><?php echo $usuarioAtual["idUsuario"]; ?></td>
                        <td><?php echo $usuarioAtual["username"]; ?></td>
                    </tr>
                    <?php endfor; ?>
                </tbody>            
            </table>
        <?php endif; ?>

        <a href="../back-end/logout.php">Sair</a>
    </body>
</html>