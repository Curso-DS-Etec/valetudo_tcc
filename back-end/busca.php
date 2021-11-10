<?php
include('conexao.php');

if(isset($_POST['btnBuscar'])) {
    $query = mysqli_query($conexao,"SELECT * FROM profissoes");
    while($exibe = mysqli_fetch_array($query));
    } else if(isset($_POST['buscar'])) {
        $busca = $_POST['buscar'];
        $query = mysqli_query($conexao,"SELECT * FROM profissoes WHERE nome LIKE '%$busca%'");
        while($exibe = mysqli_fetch_array($query));
    }



?>