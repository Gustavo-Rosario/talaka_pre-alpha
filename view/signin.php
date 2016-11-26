<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <script src='/view/js/jquery.min.js' type='text/javascript'></script>
    <script src='/view/js/script.js' type='text/javascript'></script>
</head>

<body>
    <div id="help">
        Você não possui uma conta? <span><a style="text-decoration: none; color: white" href="/signup"> Crie uma </a></span>
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