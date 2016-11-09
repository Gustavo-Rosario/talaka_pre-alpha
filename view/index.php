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
    <title> Talaka </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
</head>

<body>
    <div id="help">
        <span> Você não possui uma conta? <a href="signup.php">Crie uma</a> </span>
        <a href="#"> Precisa de ajuda? </a>
    </div>
     <header>
        <div class="wrapper">
            <div class="userlogin">
                <div id="userloginPhoto"></div>
                <div id="userloginName" style="background-image:url(images/grimgar.jpg)">
                    <p>Nome do usuário</p>
                </div>
            </div>
        </div>
    </header>
    
    <div id="intro">
        <h1>Talaka</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dolor in posuere aliquet. In vehicula fringilla risus vitae facilisis.
        </p>
    </div>
    
    <div id ="searchField">
        <label for="search">Procure por um projeto</label><br>
        <input id="search" type="search" placeholder="Projeto que pesquisa">
    </div>
    
</body>

</html>

<?php
}
?>