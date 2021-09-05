<?php include('conexao.php'); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Profissional</title>
</head>
<body>
    <div>
        <h1>Cadastro de Profissionais</h1>
        <p>Complete seus dados pessoais</p>
        <br>
    </div>
    <form>
            <fieldset>
                <div>
                    <label>Nome</label>
                    <input type="text" name="nomeProfissional">

                    <label>Sobrenome</label>
                    <input type="text" name="sobrenomeProfissional">

                    <label>Data de Nascimento</label>
                    <input type="text" name="nascimentoProfissional">
                </div>
                <br>

                <div>
                    <label>CPF</label>
                    <input type="text" name="cpfProfissional">

                    <label>RG</label>
                    <input type="text" name="rgProfissional">

                    <label>Data de Expedição</label>
                    <input type="text" name="expedicaoRgProfissional">
                </div> 
            </fieldset>
            <br>

            <fieldset>
                <div>
                    <label>Celular</label>
                    <input type="text" name="celularProfissional">

                    <label>Telefone</label>
                    <input type="text" name="telefoneProfissional">
                </div>
            </fieldset>
            <br>

            <fieldset>
                <div>
                    <label>Endereço</label>
                    <input type="text" name="enderecoProfissional">

                    <label>Número</label>
                    <input type="text" name="numeroCasaProfissional">

                    <label>Complemento</label>
                    <input type="text" name="complementoProfissional">
                </div>
                <br>

                <div>
                    <label>Cidade</label>
                    <input type="text" name="cidadeProfissional">

                    <label>Estado</label>
                    <input type="text" name="estadoProfissional">

                    <label>CEP</label>
                    <input type="text" name="cepProfissional">
                </div>

            </fieldset>

            <p>Agora nos conte um pouco sobre sua área de atuação!</p>

            <fieldset>
                <div>
                    <label>Área de atuação</label>
                        <select>
                            <option></option>
                            <option>Assistencia Técnica</option>
                            <option>Aulas Particulares</option>
                            <option>Baba</option>
                            <option>Doméstica</option>
                            <option>Eletricista</option>
                            <option>Montador de móveis</option>
                            <option>Organizador de Eventos</option>
                            <option>Pintor</option>
                        </select>
                </div>
                <br>

                <div>
                    <label>Tempo de atuação</label>
                    <label><input type="radio" name="tempoAtuacao"> 6 meses à 1 ano </label>
                    <label><input type="radio" name="tempoAtuacao"> 2 anos à 3 anos</label>
                    <label><input type="radio" name="tempoAtuacao"> mais que 3 anos</label>
                </div>

                <div>
                    <label>Possui certificação</label>
                    <label><input type="radio" name="tempoAtuacao"> sim </label>
                    <label><input type="radio" name="tempoAtuacao"> não </label>
                </div>
                
                <div>
                    <label>Anexar certificado</label>
                    <input type="file">
                </div>
            </fieldset>
            <br>

            <fieldset>
                <div>
                    <label>Conte nos um pouco mais sobrê você</label>
                    <textarea rows="6"></textarea>
                </div>
            </fieldset>

            <input type="submit" value="Concluído">
        
       
    </form>
</body>
</html>