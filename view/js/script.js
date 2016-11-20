$(main);

function validator(){
            if($("#senha").val() != $("#confirmar").val()){
                alert("As senhas devem ser iguais");
                $("#confirmar").css("border","1px solid red");
            }else{
                var nome = $("input[name='nome']").val();
                var date = $("input[name='nascimento']").val();
                var login = $("input[name='login']").val();
                var senha = $("input[name='password']").val();
                var values = { "nm_user": nome, "ds_pwd": senha,"dt_birth": date,"ds_login": login,"ds_path_img":"avatar.png" };
                var json = JSON.stringify(values);
                $.ajax({
                    url: "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/visitor/user",
                    method: "POST",
                    async: true,
                    headers:{"content-type":"application/json"},
                    data: json,
                    contentType: "application/json",
                    processData: false,
                }).done(function(response){
                    if(response.stats === "success"){
                        window.self.location = "/";
                    }else{
                        alert(response.data);
                    }
                }).fail(function(response){
                    alert("Erro ao efetuar cadastro");
                });
            }
            return false;
        }

function main() {
    $("#userloginName").click(function() {
        $("#options").slideToggle();
    });
    
    $("#search").keypress(function(event){
        if( event.which == 13 ){
            var arg = $(this).val();
            window.self.location = "/explore/name/"+arg;
        }
    });
    
    $("#login-button").click(function(){
                var login = $("input[name='email']").val();
                var senha = $("input[name='password']").val();
                var values = { "login": login, "pwd": senha };
                var json = JSON.stringify(values);
                $.ajax({
                    url: "https://talaka-pre-alpha-gmastersupreme.c9users.io/exec/client/auth",
                    method: "POST",
                    async: true,
                    headers:{"content-type":"application/json"},
                    data: json,
                    contentType: "application/json",
                    processData: false,
                }).done(function(response){
                    if(response.stats === "success"){
                        window.self.location = "/";
                    }else{
                        alert(response.data);
                    }
                }).fail(function(response){
                    alert("Erro ao efetuar login");
                });
            });
}

