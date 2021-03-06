<?php
defined("System-access") or header('location: /error');
?> 
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
    <div id='bgForms'>
        <div id="help">
            Você não possui uma conta? <span><a style="text-decoration: none; color: white" href="/signup"> Crie uma </a></span>
        </div>
    
        <div id="areaLogin">
            <h2></h2>
            <a href='/'>
                <div id="logoLogin">
                    Talaka
                </div>
            </a>
            <p>Logue-se no Talaka usando...</p>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            
            <p> ou use seu email: </p>
            
            <form onsubmit="return false" id="login">
                <input type="text" name="email" placeholder="E-mail">
                <input type="password" name="password" placeholder="Senha">
                <a href="#">Esqueci minha senha</a>
                <input id="login-button" type="submit" value="Fazer login">
            </form>
        </div>
    </div>
</body>
</html>