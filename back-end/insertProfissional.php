<?php

include('../back-end/conexao.php');

// DADOS PARA TABELA dadosLogin
$username = $_POST['usuarioProfissional'];
$password = $_POST['senhaProfissional'];
$email = $_POST['emailProfissional'];

// DADOS PARA TABELA dadosProfissional
$nome = $_POST['nomeProfissional'];
$sobrenome = $_POST['sobrenomeProfissional'];
$dataNasc = $_POST['nascimentoProfissional'];
$cpf = $_POST['cpfProfissional'];
$cnpj = $_POST['cnpjProfissional'];
$rg = $_POST['rgProfissional'];
$ufEmissoraRG = $_POST['ufEmissora'];
$dataExpedicaoRG = $_POST['expedicaoRgProfissional'];
$celular = $_POST['celularProfissional'];
$telefone = $_POST['telefoneProfissional'];
$areaAtuacao = $_POST['areaAtuacao'];
$tempoAtuacao = $_POST['tempoAtuacao'];
$possuiCertificado = $_POST['possuiCertificado'];

// DADOS PARA TABELA enderecoCadastro
$logradouro = $_POST['enderecoProfissional'];
$numero = $_POST['numeroCasaProfissional'];
$complemento = $_POST['complementoProfissional'];
$bairro = $_POST['bairroProfissional'];
$cidade = $_POST['cidadeProfissional'];
$estado = $_POST['estadoProfissional'];
$cep = $_POST['cepProfissional'];

$certificado = $_FILES['certificadoProfissional'];
    for ($i = 0; $i < count($certificado['name']); $i++) {
        move_uploaded_file($certificado['tmp_name'][$i], "../front-end/arquivos/".$certificado['name'][$i]); }

// INSERT TABELA dadosProfissional
$insertProfissional = mysqli_query($conexao, "INSERT INTO dadosProfissional
                                (nome,sobrenome,cpf,rg,ufEmissor,dataExpedicao,cnpj,
                                dataNascimento,celular,telefone,areaAtuacao,tempoAtuacao,possuiCertificado,certificado)
                                VALUES 
                                ('$nome','$sobrenome','$cpf','$rg','$ufEmissoraRG','$dataExpedicaoRG','$cnpj',
                                '$dataNasc','$celular','$telefone','$areaAtuacao','$tempoAtuacao','$possuiCertificado','".$certificado['name'][$i]."')");

$queryProfissional = mysqli_query($conexao, "SELECT max(idProfissional) FROM dadosProfissional");
    while ($exibeIdProfissional = mysqli_fetch_array($queryProfissional)) {
    
    // INSERT TABELA dadosLogin
    $insertUsuario = mysqli_query($conexao, "INSERT INTO dadosLogin (username,senha,email,idProfissional)
            VALUES
            ('$username','$password','$email','$exibeIdProfissional[0]')");

    // INSERT TABELA enderecoCadastro
    $insertEndereco = mysqli_query($conexao, "INSERT INTO enderecoCadastro
            (logradouro,numero,complemento,bairro,cidade,cep,estado,idProfissional)
            VALUES
            ('$logradouro','$numero','$complemento','$bairro','$cidade','$cep','$estado','$exibeIdProfissional[0]')");
    }
    header("location:../frond-end/telaLogin.html");

?>

