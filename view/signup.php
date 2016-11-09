<?php
session_start();
if(isset($_SESSION['cdUser'])){
    echo "Tu ta logaaado";
}else{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Cadastro </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
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
                    url: "http://talaka-pre-alpha-gmastersupreme.c9users.io/exec/system/user",
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
    </script>
</head>

<body>
    <div id="signup">
        <div id="signupStep">
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>
        <form onsubmit="validator(); return false;">
            <label for='nome'>Nome completo </label>
            <input type="text" id="nome" name="nome" placeholder="Nome" required> 
            
            <label for='nascimento'>Data de Nascimento </label>
            <input type="date" id ="nascimento" name="nascimento" placeholder="Nascimento" required>
            
            <label for='login'>Login </label>
            <input type="text" id='login' name="login" placeholder="Login" required>
            
            <label for='senha'>Senha </label>
            <input type="password" id='senha' name="password" placeholder="Senha" required>
            
            <label for='confirmar'>Confirme sua senha </label>
            <input type="password" id='confirmar' name="confirmPassword" placeholder="Confirme sua senha" required>
            
            <!--
            <input type="file" name="img" required>
            -->
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body> 

</html>
<?php
}
?>