<?php include('conexao.php');
    
    if(isset($_POST['cadastroProfissional'])) 
    {
        $nome = $_POST['nomeProfissional'];
        $sobrenome = $_POST['sobrenomeProfisssional'];
        $dataNasc = $_POST['nascimentoProfissional'];
        $cpf = $_POST['cpfProfissional'];
        $cnpj = $_POST['cnpjProfissional'];
        $rg = $_POST['rgProfissional'];
        $ufEmissoraRG = $_POST['ufEmissora'];
        $dataExpedicaoRG = $_POST['expedicaoRgProfissional'];
        $celular = $_POST['celularProfissional'];
        $telefone = $_POST['telefoneProfissional'];
        $logradouro = $_POST['enderecoProfissional'];
        $numero = $_POST['numeroCasaProfissional'];
        $complemento = $_POST['complementoProfissional'];
        $cidade = $_POST['cidadeProfissional'];
        $estado = $_POST['estadoProfissional'];
        $cep = $_POST['cepProfissional'];
        $areaAtuacao = $_POST['areaAtuacao'];
        $tempoAtuacao = $_POST['tempoAtuacao'];
        $possuiCertificado = $_POST['possuiCertificado'];

            $insert = mysqli_query($conexao, 
            "INSERT INTO 
                dadosProfissional 
                    (nome,sobrenome,cpf,rg,ufEmissor,dataExpedicao,cnpj,
                    dataNascimento,celular,telefone,areaAtuacao,possuiCertificado)
                        VALUES 
                            ('$nome','$sobrenome','$cpf,'$rg','$ufEmissoraRG', 
                            '$dataExpedicaoRG','$cnpj','$dataNasc','$celular','$telefone',
                            '$areaAtuacao','$possuiCertificado')");
        
                                if($insert) {					 		
                                    echo 'success';
                                } else {
                                    echo 'error';   
                                }
    }



?>