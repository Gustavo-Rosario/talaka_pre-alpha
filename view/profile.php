<!DOCTYPE html>
<html>
<body>
    <div id="container">
        <div id="profile" style='background-image:url(/view/images/<?= $cover ?>)'>
            <div id="profileColor"></div>
            <div id="profileInfo">
                <div id="profilePhoto">
                    <div id="pPhoto" style='background-image:url(/user-img/<?=$img?>)'></div>
                    <div id="pProjects">
                        <ul>
                            <li>Criados
                                <br> <span><?= $projects ?></span></li>
                            <li>Apoiados
                                <br> <span><?= $finances ?></span></li>
                        </ul>
                    </div>
                </div>
                <div id="profileDescription">
                    <h1><?= $nome ?></h1>
                    
                    <p>
                        <?= $biography ?>
                    </p>
                    
                    <ul id="socialnetwork">
                        <h2>Redes Sociais</h2>
                        <li></li>
                        <li></li>
                        <li></li>
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