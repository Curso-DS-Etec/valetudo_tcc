$(function(){
    $("button#btnEntrar").on("click", function(e){
        e.preventDefault();

        var campoUsuario = $("form#formularioLogin #usuarioProfissional").val();
        var campoSenha = $("form#formularioLogin #senhaProfissional").val();

        if(campoUsuario.trim() == "" || campoSenha.trim() == ""){
            $("div#mensagem").html("Preencha todos os campos.");
        }else{
            $.ajax({
                url: "../back-end/login.php",
                type: "POST",
                data: {
                    // nome do post "email" e valor do post "campoEmail"
                    usuarioProfissional: campoUsuario,
                    senhaProfissional: campoSenha
                },

                success: function(retorno){
                    retorno = JSON.parse(retorno);

                    if(retorno["erro"]){
                        $("div#mensagem").html(retorno["mensagem"]);
                    }else{
                        window.location = "../painelProfissional/index.html";
                    }
                },

                error: function(){
                    $("div#mensagem").html("Ocorreu um erro durante a solicitação");
                }
            });
        }
    });
});

// verifica se o jquery esta funcionando
// $(function(){
//     alert("ok");
// });