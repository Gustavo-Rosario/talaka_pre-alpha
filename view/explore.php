<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Explore </title>
    <link href="../../view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
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
                        <div id="userloginPhoto" <?php echo 'style="background-image:url(../../user-img/'.$_SESSION['imgUser'].')"' ?>></div>
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
        <div id="searchText">
            <div class="wrapper">
                <h1>Termo procurado:  "<?= $data['termo'];?>"</h1>
            </div>
        </div>

        <div class="wrapper explore">
            <h1> <?= $data['total'];?> Resultados foram encontrados</h1>
            <?php
                for($a = 0; $a < (count($data) - 2); $a++){ 
                    $percent = (($data['d'.$a]->collected) * 100)/ $data['d'.$a]->meta;
            ?>
            <a <?= 'href="https://talaka-pre-alpha-gmastersupreme.c9users.io/project/'.$data['d'.$a]->id.'"';?>>
            <div class="eachProject">
                <div class='eachProjectCover' <?php echo 'style="background-image:url(../../proj-img/'.$data['d'.$a]->img.')"' ?>></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2><?= $data['d'.$a]->title;?></h2>
                    <p> <?= $data['d'.$a]->ds;?> </p>
                    
                    <div class="meta">
                        <p><b>R$ <?= $data['d'.$a]->collected;?>,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'<?= 'style="width:'.$percent.'%"';?>></div>
                        </div>
                        <ul>
                            <li><?= round($percent); ?>%</li>
                            <li>Aberto até <?= implode("/", array_reverse(explode("-",$data['d'.$a]->dt)) ); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            </a>
            <?php
            }
            ?>
        </div>
    </div>
    <footer>
        rodape
    </footer>
</body>

</html>