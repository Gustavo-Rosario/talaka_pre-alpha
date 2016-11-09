<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Talaka </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <style>
        a:hover{
           color: #D50C7E; 
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(main);
        
        function main(){
            $("#search").keypress(function(event){
                if( event.which == 13 ){
                    var arg = $(this).val();
                    window.self.location = "/explore/name/"+arg;
                }
            });
        }
    </script>
</head>

<body>
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
    
    <div id="intro">
        <h1>Talaka</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar dolor in posuere aliquet. In vehicula fringilla risus vitae facilisis.
        </p>
    </div>
    
    <div id ="searchField">
        <label for="search">Procure por um projeto</label><br>
        <input id="search" name="name" type="search" placeholder="Pesquisar">
    </div>
    
</body>

</html>