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
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <title> Página de Projeto </title>
    </head>
    <body>
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
        <div id="container">
            <nav>
                <div class="wrapper">
                    <ul>
                        <li>Logo</li>
                    </ul>
                    <ul>
                        <li>Home</li>
                        <li>Teste</li>
                        <li>Teste</li>
                        <li>user</li>
                    </ul>
                </div>
            </nav>
            
            <!--Área inicial de projeto-->
            <div id="projectCover">
                <div id="projectCoverColor"></div>
                <div id="projectInfos" class="wrapper">
                    <div id="hqCover">
                        
                        <div id=""></div>
                    </div>
                    <div id="hqInfos">
                        <h1>Grimgar of Fantasy and Ashe, 2016 <span> 16 </span></h1>
                        <h2>por <a href="#">Nome do Usuário</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit metus velit, eu facilisis est faucibus pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas ut leo convallis rutrum. consectetur adipiscing elit. Morbi egestas ut leo convallis rutrum. 
                        </p>
                        
                        <ul id="hqTags">
                            <li>Drama</li>
                            <li>Light Novel</li>
                            <li>RPG</li>
                            <li>Amazing Art</li>
                            <li>Drama</li>
                            <li>Light Novel</li>
                            <li>RPG</li>
                            <li>Amazing Art</li>
                            <li>Drama</li>
                            <li>Light Novel</li>
                            <li>RPG</li>
                            <li>Amazing Art</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="projectDescription"></div>
        </div>
    </body>
</html>

<?php
}
?>