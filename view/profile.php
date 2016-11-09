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
    <title> Projeto </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
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
        <div id="profile">
            <div id="profileColor"></div>
            <div id="profileInfo">
                <div id="profilePhoto">
                    <div id="pPhoto"></div>
                    <div id="pProjects">
                        <ul>
                            <li>Criados
                                <br> <span>2</span></li>
                            <li>Apoiados
                                <br> <span>32</span></li>
                        </ul>
                    </div>
                </div>
                <div id="profileDescription">
                    <h1>Lucas Teixeira de Lima</h1>
                    <h2>Profissão</h2>
                    <h2>Localização</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas cursus nunc ac ante malesuada feugiat. Duis a tincidunt risus. Morbi eget ex in augue scelerisque rutrum. Sed vel vestibulum leo, et ultrices felis. Suspendisse potenti. Integer eget risus euismod, laoreet nisi vel, aliquet justo. Nunc non congue justo, at rutrum augue. Nulla non fringilla ante, non tristique ex. Maecenas malesuada massa egestas dolor fringilla pharetra. Mauris nisl ligula, ullamcorper nec ante et, viverra ullamcorper sem. Sed imperdiet sollicitudin enim, malesuada maximus nunc aliquam non.Nulla non fringilla ante, non tristique ex. Maecenas malesuada massa egestas dolor fringilla pharetra. Mauris nisl ligula, ullamcorper nec ante et, viverra ullamcorper sem. Sed imperdiet sollicitudin enim, malesuada maximus nunc aliquam non.
                    </p>
                    <h2>Redes Sociais</h2>
                    <ul class="socialnetwork">
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                        <li>Facebook</li>
                    </ul>
                    <buttton id="message">Enviar mensagem</buttton>
                </div>
            </div>
        </div>
        <section class="profileCreated">
            <div class="wrapper">
                <h1>Projetos criados</h1>
                <ul>
                    <li>Data de criação</li>
                    <li>Por metas</li>
                    <li>Maior número de apoiadores</li>
                </ul>
                <div class="pProjectsCreated">
                    <div class="pProjectsWrapper">
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="profileCreated">
            <div class="wrapper">
                <h1>Projetos apoiados</h1>
                <ul>
                    <li>Data de criação</li>
                    <li>Por metas</li>
                    <li>Maior número de apoiadores</li>
                </ul>
                <div class="pProjectsCreated">
                    <div class="pProjectsWrapper">
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                        <div class="eachProject"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        rodape
    </footer>
</body>

</html>

<?php
}
?>