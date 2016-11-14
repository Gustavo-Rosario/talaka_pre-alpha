<?php
session_start();
if(isset($_SESSION['cdUser'])){
    header("location: /");
}else{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(main);
        
        function main(){
            
            $("#login-button").click(function(){
                var login = $("input[name='email']").val();
                var senha = $("input[name='password']").val();
                var values = { "login": login, "pwd": senha };
                var json = JSON.stringify(values);
                $.ajax({
                    url: "https://talaka-pre-alpha-gmastersupreme.c9users.io/exec/user/auth",
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
    </script>
</head>

<body>
    <div id="help">
        Você não possui uma conta? <span><a style="text-decoration: none; color: white" href="/cadastrar"> Crie uma </a></span>
        <a href="#"> Precisa de ajuda? </a>
    </div>

    <div id="areaLogin">
        <h2></h2>
        <div id="logoLogin">
            Logo do Talaka
        </div>
        <p>Logue-se no Talaka usando...</p>
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        
        <p> ou use seu email: </p>
        
        <form onsubmit="return false" id="login">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Senha">
            <a href="#">Esqueci minha senha</a>
            <input id="login-button" type="submit" value="Fazer login">
        </form>
    </div>
</body>
</html>
<?php
}
?>