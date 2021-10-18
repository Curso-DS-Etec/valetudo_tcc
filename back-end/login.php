<?php
    require("conexao2.php");

    if(isset($_POST["usuarioProfissional"]) && isset($_POST["senhaProfissional"]) && $con != null){

        $query = $con->prepare("SELECT * FROM dadosLogin WHERE username = ? AND senha = ?");
        $query->execute(array($_POST["usuarioProfissional"], $_POST["senhaProfissional"]));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION["username"] = array($user["nome"], $user["adm"]);
                    
                    echo json_encode(array("erro" => 0));
                }else{
                    echo json_encode(array("erro" => 1, "mensagem" => "Email e/ou senha incorretos."));
                }
            }else{
                echo json_encode(array("erro" => 1, "mensagem" => "Ocorreu um erro interno no servidor."));
            }
        ?>