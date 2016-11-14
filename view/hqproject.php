<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Projeto </title>
    <link href="../view/css/style.css" rel="stylesheet" type="text/css">
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
    <main>
        <section id="projectInfo">
            <div id="project" class="column columnLeft">
                <div id="projectCover" <?php echo 'style="background-image: url(../proj-img/'.$img.'); background-size:cover"'; ?>></div>
                <div id="projectInformations">
                    <h1><?= $title; ?></h1>
                    <h2>por <?= $creator;?></h2>

                    <p>
                         <?= $ds; ?>
                    </p>
                </div>
            </div>
            <div id="finance" class="column columnRight">
                <div id="goal">
                    <h1 id='goal'>R$<?= $collected ?>,00 <br><span>Investidos de R$<?= $meta ?>,00</span></h1>
                    <h2><?= round( ( strtotime($dtF) - strtotime(date("Y-m-d")) ) / (60 * 60 * 24) ); ?> dias restantes
                    <br><span><?= implode("/", array_reverse(explode("-",$dtB)) )." à ".implode("/", array_reverse(explode("-",$dtF)) ); ?></span></h2>
                    
                    <h2><?= $total; ?> financiadores</h2>
                </div>
                <button id="btn_finance">Financiar</button>
                <button id="btn_demo">Visuaizar Demonstração</button>


                <div id="socialnetwork">
                    <h1>Redes sociais</h1>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>GooglePlus</li>
                        <li>Linkedin</li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="projectDesc">
            <div id="projectDescription" class="column columnLeft">
                <ul>
                    <li>Resumo</li>
                    <li>Recompensas</li>
                    <li>Atualizações</li>
                    <li>Comentários (0)</li>
                    <li>Investidores</li>
                    <li>Galeria</li>
                </ul>
                <div id="info">
                    <h1> <i>icon</i> Conheça o projeto .nome do projeto.? </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec nulla sit amet turpis mattis pulvinar id a justo. Fusce scelerisque quis augue nec tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean libero turpis, rutrum molestie turpis at, porttitor blandit eros. Nulla eu facilisis enim. In a sem vel mauris eleifend cursus feugiat non neque. Quisque porttitor faucibus facilisis. Donec nec felis vulputate, volutpat ante eu, ultricies tellus. Pellentesque volutpat nisl est, eget viverra dui egestas id. Integer rhoncus sem ut quam dignissim pulvinar. Nam rutrum nec tellus ut sodales. Proin elit arcu, fermentum eget dolor non, venenatis dapibus lectus.
                    </p>
                    <p>Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et. Nullam pretium auctor erat, ac laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget mi ligula. Fusce vitae quam nec massa hendrerit mollis sit amet ut elit. Mauris vitae arcu in nunc fermentum pellentesque quis eu dui. Morbi at pretium tellus, in condimentum libero. </p>
                    <p>Duis imperdiet nulla id tortor aliquet congue. Aenean nec gravida nunc, at porta lorem. Aenean mollis massa turpis, in porttitor nisl commodo et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec nulla sit amet turpis mattis pulvinar id a justo. Fusce scelerisque quis augue nec tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean libero turpis, rutrum molestie turpis at, porttitor blandit eros. Nulla eu facilisis enim. In a sem vel mauris eleifend cursus feugiat non neque. Quisque porttitor faucibus facilisis. Donec nec felis vulputate, volutpat ante eu, ultricies tellus. Pellentesque volutpat nisl est, eget viverra dui egestas id. Integer rhoncus sem ut quam dignissim pulvinar. Nam rutrum nec tellus ut sodales. Proin elit arcu, fermentum eget dolor non, venenatis dapibus lectus. Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et. Nullam pretium auctor erat, ac laoreet nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eget mi ligula. Fusce vitae quam nec massa hendrerit mollis sit amet ut elit. Mauris vitae arcu in nunc fermentum pellentesque quis eu dui. Morbi at pretium tellus, in condimentum libero. Duis imperdiet nulla id tortor aliquet congue. Aenean nec gravida nunc, at porta lorem. Aenean mollis massa turpis, in porttitor nisl commodo et.
                    </p>
                </div>
            </div>
            <div id="reward" class="column columnRight">
                <h1>Recompensa</h1>
                <div class="eachReward">
                    <h3>R$ 10,00</h3>
                    <h4>5 apoiadores</h4>
                    <p>Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et.</p>
                </div>

                <div class="eachReward">
                    <h3>R$ 10,00</h3>
                    <h4>5 apoiadores</h4>
                    <p>Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et.</p>
                </div>

                <div class="eachReward">
                    <h3>R$ 10,00</h3>
                    <h4>5 apoiadores</h4>
                    <p>Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        rodape
    </footer>
</body>

</html>