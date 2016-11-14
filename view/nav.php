<head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <title>
        <?= $pag_title ?>
    </title>
</head>
<nav>
    <div class="wrapper">
        <ul>
            <li>
                <a href="#"><h1>Talaka</h1></a>
            </li>
            <li>
                <input id="search" name="name" type="search" placeholder="Pesquisar">
            </li>
            <li>
                <?php
                if (isset($_SESSION['cdUser'])){
            ?>

                    <div class="userlogin">
                        <div id="userloginPhoto" <?php echo 'style="background-image:url(../user-img/'.$_SESSION[ 'imgUser']. ')"' ?></div>
                        <div id="userloginName">
                            José Luiz
                            <?= $_SESSION['nmUser']; ?>
                                <a href="../logout.php"><span id="arrowOptions"></span></a>
                        </div>
                    </div>

                    <?php
            }else{
            ?>
                        <div class="userlogin">
                            <span>Você não possui uma conta? <br>
                        <a href="">Crie uma </a>
                        ou 
                        <a href="">Logue-se </a>
                    </span>

                        </div>
            </li>
        </ul>
    </div>
</nav>