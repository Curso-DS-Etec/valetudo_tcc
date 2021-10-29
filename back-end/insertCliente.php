<?php 

    include('../back-end/conexao.php');
    
        // DADOS PARA TABELA dadosLogin
        $username = $_POST['usuarioCliente'];
        $password = $_POST['senhaCliente'];
        $email = $_POST['emailCliente'];

        // DADOS PARA TABELA dadosProfissional
        $nome = $_POST['nomeCliente'];
        $sobrenome = $_POST['sobrenomeCliente'];
        $dataNasc = $_POST['nascimentoCliente'];
        $cpf = $_POST['cpfCliente'];
        $rg = $_POST['rgCliente'];
        $ufEmissoraRG = $_POST['ufEmissora'];
        $dataExpedicaoRG = $_POST['expedicaoRgCliente'];
        $celular = $_POST['celularCliente'];
        $telefone = $_POST['telefoneCliente'];
        $sobre = $_POST['sobre'];

        // DADOS PARA TABELA enderecoCadastro
        $logradouro = $_POST['enderecoCliente'];
        $numero = $_POST['numeroCasaCliente'];
        $complemento = $_POST['complementoCliente'];
        $bairro = $_POST['bairroCliente'];
        $cidade = $_POST['cidadeCliente'];
        $estado = $_POST['estadoCliente'];
        $cep = $_POST['cepCliente'];

            // SEQUENCIA DE INSERTS PARA ENVIAR OS DADOS COLETADOS PARA TABELAS DO BANCO
            // INSERT TABEL dadosCliente
            $insertCliente = mysqli_query($conexao,"INSERT INTO dadosCliente
                            (nome,sobrenome,cpf,rg,ufEmissor,dataExpedicao,
                            dataNascimento,celular,telefone,sobre)
                            VALUES 
                            ('$nome','$sobrenome','$cpf,'$rg','$ufEmissoraRG','$dataExpedicaoRG',
                            '$dataNasc','$celular','$telefone','$sobre')");

            // QUERYS PARA COLETAR O ID DA TABELA dadosLogin E enderecoCadastro E INSERIR NA TABELA dadosProfissional no campo FK
            $query = mysqli_query($conexao,"SELECT * FROM dadosCliente");
                while($exibe = mysqli_fetch_array($query)) {

            // INSERT TABELA enderecoCadastro
            $insertEnderecoC = mysqli_query($conexao,"INSERT INTO enderecoCadastro
                            (logradouro,numero,complemento,bairro,cidade,cep,estado,idCliente)
                            VALUES
                            ('$logradouro','$numero','$complemento','$bairro','$cidade','$cep','$estado','$exibe[0]')");

            // INSERT TABELA dadosLogin
            $insertUsuarioC = mysqli_query($conexao,"INSERT INTO dadosLogin
                            (username,senha,email)
                            VALUES
                            ('$username','$password','$email','$exibe[0]')");
         
                            // RETORNA SUCCESS SE TODOS OS DADOS FORAM INSERIDOS NO BANCO OU ERROR SE NÃO FOREM
                            if($insertEnderecoC) {					 		
                                echo 'success';
                            } else {
                                 echo 'error';
                            }
                    
                        }

                        echo "$username <br>";
                        echo "$password <br>";
                        echo "$email <br>";
                
                        // DADOS PARA TABELA dadosProfissional
                        echo "$nome <br>";
                        echo "$sobrenome <br>";
                        echo "$dataNasc <br>";
                        echo "$cpf <br>";
                        echo "$rg <br>";
                        echo "$ufEmissoraRG <br>"; 
                        echo "$dataExpedicaoRG <br>"; 
                        echo "$celular <br>";
                        echo "$telefone <br>";
                        echo "$sobre <br>";
                            
                        // DADOS PARA TABELA enderecoCadastro
                        echo "$logradouro <br>";
                        echo "$numero <br>";
                        echo "$complemento <br>";
                        echo "$bairro <br>";
                        echo "$cidade <br>";
                        echo "$estado <br>";
                        echo "$cep <br>";
?>