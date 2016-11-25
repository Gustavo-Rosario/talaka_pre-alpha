$(main);

function fin(project){
    var valor = $("input[name='valor']").val();
    var values = {'cd_project':project,'vl_financing':valor};
    var json = JSON.stringify(values);
    var server = document.URL;
    var id = $('#spanCdUser').html();
    $.ajax({
        url: "https://"+server.split("/")[2]+"/exec/client/invest/"+id,
        method: "POST",
        async: true,
        headers:{"content-type":"application/json"},
        data: json,
        contentType: "application/json",
        processData: false,
    }).done(function(response){
        var r = JSON.parse(response);
        if(r.stats === "success"){
            alert('Financiado com sucesso');
            location.reload();
        }else{
            alert('deu ruim');
        }
    }).fail(function(response){
        alert("Deu mega ruim");
    });
}

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
                var server = document.URL;
                $.ajax({
                    url: "https://"+server.split("/")[2]+"/exec/visitor/user",
                    method: "POST",
                    async: true,
                    headers:{"content-type":"application/json"},
                    data: json,
                    contentType: "application/json",
                    processData: false,
                }).done(function(response){
                    var r = JSON.parse(response);
                    if(r.stats === "success"){
                        window.self.location = "/";
                    }else{
                        alert(r.data);
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
    
    $('#btn_finance').click(function(){
        $('#financeWrapper').fadeIn('slow');
    });
    
    $('#financeClose').click(function(){
       $('#financeWrapper').fadeOut('slow');
    });
    
    
    
    $("#login-button").click(function(){
                var login = $("input[name='email']").val();
                var senha = $("input[name='password']").val();
                var values = { "login": login, "pwd": senha };
                var json = JSON.stringify(values);
                var server = document.URL;
                $.ajax({
                    url: "https://"+server.split("/")[2]+"/exec/client/auth",
                    method: "POST",
                    async: true,
                    headers:{"content-type":"application/json"},
                    data: json,
                    contentType: "application/json",
                    processData: false,
                }).done(function(response){
                    var r = JSON.parse(response);
                    if(r.stats == "success"){
                        window.self.location = "/";
                    }else{
                        alert(r.data);
                    }
                }).fail(function(response){
                    alert("Erro ao efetuar login");
                });
            });
            
     
}

