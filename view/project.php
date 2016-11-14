<?php
session_start();
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
        <?php
            if(isset($_SESSION['cdUser'])){
            ?>
            <div id="help">
                <span><a style="text-decoration: none; color: white" href="../logout.php">Sair</a> </span>
            </div>
            <header>
                <div class="wrapper">
                    <div class="userlogin">
                        <div id="userloginPhoto" <?php echo 'style="background-image:url(../user-img/'.$_SESSION['imgUser'].')"' ?>></div>
                        <div id="userloginName" >
                            <p><?= $_SESSION['nmUser']; ?></p>
                        </div>
                    </div>
            <?php
            }else{
            ?>
            <div id="help">
                <span> Você não possui uma conta? <a style="text-decoration: none; color: white" href="/cadastrar">Crie uma</a> ou <a style="text-decoration: none; color: white" href="/login">Faça Login</a></span>
                <a href="#"> Precisa de ajuda? </a>
            </div>
            <header>
                <div class="wrapper">
                    <br>
                    <br>
            <?php
            }
            ?>
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