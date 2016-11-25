<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
<head>
    <meta charset="UTF-8">
    <link href="/view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,400,700|Roboto:100,400,700" rel="stylesheet">
    <script src='/view/js/jquery.min.js' type='text/javascript'></script>
    <script src='/view/js/script.js' type='text/javascript'></script>
    <title>
        TALAKA - <?= $pag_title ?>
    </title>
</head>
<nav>
    <span style='display:none' id='spanCdUser'><?= isset($_SESSION['cdUser'])?$_SESSION['cdUser']:"" ; ?></span>
    <div class="wrapper">
        <ul>
            <li>
                <a href="/"><h1>Talaka</h1></a>
            </li>
            <li>
                <input id="search" name="name" type="search" placeholder="Pesquisar">
            </li>
            <li>
                <?php
                if (isset($_SESSION['cdUser'])){
                ?>

                    <div class="userlogin">
                        <div id="userloginPhoto" <?php echo 'style="background-image:url(/user-img/'.$_SESSION[ 'imgUser']. ')"' ?>> </div>
                        <div id="userloginName">
                            <?= $_SESSION['nmUser']; ?>
                                <span id="arrowOptions"></span>
                                <div id="options">
                            <ul>
                                <li>Ver perfil</li>
                                <li>Alterar dados</li>
                                <a href="../logout.php">
                                    <li>Sair</li>
                                </a>
                            </ul>
                        </div>
                        </div>
                        <div id="publish">
                           <button>Criar campanha</button>
                        </div>
                    </div>
                    
                        
                    </div>


                <?php
                }else{
                ?>
                        <div class="userlogin">
                            <span>Você não possui uma conta? <br>
                        <a href="/cadastrar">Crie uma </a>
                        ou 
                        <a href="/login">Logue-se </a>
                    </span>

                        </div>
                        
            <?php
            }
            ?>
            </li>
            
        </ul>

    </div>
</nav>