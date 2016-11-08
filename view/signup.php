<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
</head>

<body>
    <div id="signup">
        <div id="signupStep">
            <div class="step"></div>
            <div class="step"></div>
            <div class="step"></div>
        </div>
        <form method="POST" action="">
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
            
            
            <input type="file" required>
            <input type="submit" value="Logar">
        </form>
    </div>
</body> 

</html>