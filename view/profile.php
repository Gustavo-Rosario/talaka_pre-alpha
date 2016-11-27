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
        <section class="profileCreated pageProfile">
            <div class="wrapper">
                <h1>Projetos criados</h1>
                <ul>
                    <li>Data de criação</li>
                    <li>Por metas</li>
                    <li>Maior número de apoiadores</li>
                </ul>
                <div class="pProjectsCreated">
                    <?php
                        if(count($myprojects) == 0 ){
                                echo "<p> Nenhum projeto criado até o momento </p>";
                        } else { 
                    ?>
                    <div class="pProjectsWrapper">
                        <?php
                                foreach($myprojects as $proj){
                                    echo '<a href="/project/'.$proj->id.'"><div style="background-image: url(/proj-img/'.$proj->img.')" class="eachProject">
                                    <div class="nomeProjeto">
                                        <h4> '.$proj->title.' </h4>
                                    </div>
                                    <div class="progressbar">
                                        <div class="progressbarvalue" style="width:' . $proj->percent . '%" ></div>
                                    </div>
                                </div>
                                </a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="profileCreated pageProfile">
            <div class="wrapper">
                <h1>Projetos apoiados</h1>
                <ul>
                    <li>Data de criação</li>
                    <li>Por metas</li>
                    <li>Maior número de apoiadores</li>
                </ul>
                <div class="pProjectsCreated">
                    
                    <?php
                        if(count($myfinances) == 0 ){
                            echo "<p>Nenhum projeto financiado até o momento</p>";
                            echo "f:".count($myfinances);
                        }else{
                    ?>
                    <div class="pProjectsWrapper">
                        <?php
                            foreach($myfinances as $finance){
                                echo '<a href="/project/'.$finance->id.'">
                                <div style="background-image: url(/proj-img/'.$finance->img.')" class="eachProject">
                                    <div class="nomeProjeto">
                                        <h4> '.$finance->title.' </h4>
                                    </div>
                                    <div class="progressbar">
                                        <div class="progressbarvalue" style="width:' . $finance->percent . '%" ></div>
                                    </div>
                                </div>
                                </a>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>