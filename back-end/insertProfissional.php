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

// QUERYS PARA COLETAR O ID DA TABELA dadosLogin E enderecoCadastro E INSERIR NA TABELA dadosProfissional no campo FK
/* $queryEndereco = mysqli_query($conexao,"SELECT * FROM enderecoCadastro");
            $queryUsuario = mysqli_query($conexao,"SELECT * FROM dadosLogin");
                while($exibeUsuario = mysqli_fetch_array($queryUsuario)) {
                    while($exibeEndereco = mysqli_fetch_array($queryEndereco)) { */

// INSERT TABELA dadosProfissional
$insertProfissional = mysqli_query($conexao, "INSERT INTO dadosProfissional
                                (nome,sobrenome,cpf,rg,ufEmissor,dataExpedicao,cnpj,
                                dataNascimento,celular,telefone,areaAtuacao,tempoAtuacao,possuiCertificado)
                                VALUES 
                                ('$nome','$sobrenome','$cpf','$rg','$ufEmissoraRG','$dataExpedicaoRG','$cnpj',
                                '$dataNasc','$celular','$telefone','$areaAtuacao','$tempoAtuacao','$possuiCertificado')");

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
/* }           
                            / RETORNA SUCCESS SE TODOS OS DADOS FORAM INSERIDOS NO BANCO OU ERROR SE NÃO FOREM
                            if($insertProfissional) {					 		
                                echo 'success';
                            } else {
                                 echo 'error';
                            }
                        */

echo "$username <br>";
echo "$password <br>";
echo "$email <br>";
//echo "$exibeIdProfissional";

// DADOS PARA TABELA dadosProfissional
echo "$nome <br>";
echo "$sobrenome <br>";
echo "$dataNasc <br>";
echo "$cpf <br>";
echo "$cnpj <br>";
echo "$rg <br>";
echo "$ufEmissoraRG <br>";
echo "$dataExpedicaoRG <br>";
echo "$celular <br>";
echo "$telefone <br>";
echo "$areaAtuacao <br>";
echo "$tempoAtuacao <br>";
echo "$possuiCertificado <br>";

// DADOS PARA TABELA enderecoCadastro
echo "$logradouro <br>";
echo "$numero <br>";
echo "$complemento <br>";
echo "$bairro <br>";
echo "$cidade <br>";
echo "$estado <br>";
echo "$cep <br>";
//echo "$exibeIdProfissional";
