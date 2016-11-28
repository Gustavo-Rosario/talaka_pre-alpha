<?php
defined("System-access") or header('location: /error');
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Cadastro </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <script src='/view/js/jquery.min.js' type='text/javascript'></script>
    <script src='/view/js/script.js' type='text/javascript'></script>
</head>

<body style='overflow:auto'>
    <div id='bgForms'>
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
            
            <label for='signbio'>Biografia</label>
            <textarea id='signbio' style='
                margin:0 auto 20px auto;
                display:block;
                width:83%;
                padding:2% 1% 2% 2%
            ' placeholder='Biografia atual do usuário' required></textarea>
            <!--
            <input type="file" name="img" required>  
            -->
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
