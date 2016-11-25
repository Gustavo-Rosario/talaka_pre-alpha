<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
<style>
    a:hover{
       color: #D50C7E; 
    }
    
    .new-tab-link {
  padding-right: 14px;
  background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3ggXDSIzCeRHfQAAABl0RVh0Q29tbWVudABDcmVhdGVkIHdpdGggR0lNUFeBDhcAAAA9SURBVBjTY2RAA/+XMvxHF2NkwAOwacCq4P9Shv8suFQzRiNsYUEXwKoJ2VhkNrIaJgYiAAs2N2BVRMirAD6JHi10MCdVAAAAAElFTkSuQmCC) no-repeat right center;
}

.page-title {
  font: 400 40px/1.5 Open Sans, sans-serif;
  text-align: center;
}

.circles {
  margin-bottom: -10px;
}

.circle {
  width: 100px;
  margin: 6px 6px 20px;
  display: inline-block;
  position: relative;
  text-align: center;
  line-height: 1.2;
}

.circle canvas {
  vertical-align: top;
}

.circle strong {
  position: absolute;
  top: 30px;
  left: 0;
  width: 100%;
  text-align: center;
  line-height: 40px;
  font-size: 30px;
}

.circle strong i {
  font-style: normal;
  font-size: 0.6em;
  font-weight: normal;
}

.circle span {
  display: block;
  color: #aaa;
  margin-top: 12px;
}

p {
  margin: 40px 0;
}

    
</style>
<script src="https://cdn.rawgit.com/kottenator/jquery-circle-progress/1.2.0/dist/circle-progress.js"></script>
<div id="container">
        <div id="carousel">
            <div id="carouselWrapper">
                
                <?php
                for($a = 1; $a <= (count($data)); $a++){
                ?>
                <div class="carouselEach">
                    <div class="carouselCover" <?= 'style="background-size:cover;background-image:url(../../proj-img/'.$data['d'.$a]->imgB.')"' ?>></div>
                    <div class="wrapper cWrapper">
                        <div class="projectIndexInfo">
                            <div class='projectIndexCover' <?php echo 'style="background-image:url(../../proj-img/'.$data['d'.$a]->img.')"' ?>></div>
                            <a <?= 'href="/project/'. $data['d'.$a]->id.'"' ?>><p> Conhecer projeto</p></a>
                        </div>
                        <div class="projectIndex">
                            <div class="btns">
                                <span>left</span>
                                <span>right</span>
                            </div>
                            <h1>
                                <?= $data['d'.$a]->title; ?>
                            </h1>
                            <div class="projectH2">
                                <div class="projectOwner" <?php echo 'style="background-image:url(../../user-img/'.$data['d'.$a]->imgU.')"' ?>></div>
                                <h2><?= $data['d'.$a]->creator;?></h2>
                            </div>
                            <ul>
                                <li>
                                    <span class="icon icon2" id="iconMeta"></span><b>Meta</b>
                                    <div <?= 'class="second circle" id="c'.$a.'"';?>>
                                      <strong></strong>
                                    </div>
                                    <?= '<script type="text/javascript">
                                            $("#c'.$a.'").circleProgress({
                                                value: '. (round($data['d'.$a]->percent) / 100).'
                                            }).on("circle-animation-progress", function(event, progress) {
                                              $(this).find("strong").html(parseInt(' .round($data['d'.$a]->percent).'* progress) + "<i>%</i>");
                                            });
                                    </script>';?>
                                </li>
                                <li>
                                <span class="icon icon2" id="iconResume"></span><b>Descrição</b>
                                    <p><?= $data['d'.$a]->ds;?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                
            </div>
        </div>

        <div class="sect" id="sectProjects">
            <div class="wrapper">
                <ul>
                    <li><span class="icon icon1" id="iconPopular"></span><b>Projetos populares</b></li>
                    <li><span class="icon icon1" id="iconNear"></span><b>Populares perto de você</b></li>
                    <li><span class="icon icon1" id="iconBalloon"></span><b>Mais comentados</b></li>
                    <li><span class="icon icon1" id="iconNew"></span><b>Novos projetos</b></li>
                    <li><span class="icon icon1" id="iconAut"></span><b>Novos autores</b></li>
                </ul>
            </div>
            <div class="wrapper" id="indexProject">
                <div class="pProjectsCreated">
                    <div class="pProjectsWrapper">
                        <div class="wrapper explore">
                            
                            <?php
                                for($b = 1; $b <= (count($project)); $b++){ 
                                    $percent = (($project['d'.$b]->collected) * 100)/ $project['d'.$b]->meta;
                            ?>
                            <a <?= 'href="https://talaka-pre-alpha-gmastersupreme.c9users.io/project/'.$project['d'.$b]->id.'"';?>>
                            <div class="eachProject">
                                <div class='eachProjectCover' <?= 'style="background-image:url(../../proj-img/'.$project['d'.$b]->img.')"' ?>></div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2><?= $project['d'.$b]->title;?></h2>
                                    <p> <?=  (strlen($project['d'.$b]->ds) > 300)? substr($project['d'.$b]->ds,0,300)." (...)" : $project['d'.$b]->ds;
                                    ?> </p>
                                    
                                    <div class="meta">
                                        <p><b>R$ <?= $project['d'.$b]->collected;?>,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'<?= 'style="width:'.$percent.'%"';?>></div>
                                        </div>
                                        <ul>
                                            <li><?= round($percent); ?>%</li>
                                            <li>Aberto até <?= implode("/", array_reverse(explode("-",$project['d'.$b]->dtB)) ); ?></li>
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
                </div>
            </div>
        </div>

        <div class="sect" id="sectPeople">
            <div class="wrapper">
                <h1>O que os autores acham do Talaka?</h1>
                <div id='peopleArea'>
                    <div class="eachPeopleSay">
                        <ul>
                            <li class="userPhoto"></li>
                            <li><p>Nome do usuário<br><b>Cidade - Estado</b></p></li>
                        </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.
                            </p>
                        <a href="profile.php"><p>Ver perfil</p></a>
                    </div>
                    
                    <div class="eachPeopleSay">
                        <ul>
                            <li class="userPhoto"></li>
                            <li><p>Nome do usuário<br><b>Cidade - Estado</b></p></li>
                        </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.
                            </p>
                        <a href="profile.php"><p>Ver perfil</p></a>
                    </div>
                    
                    <div class="eachPeopleSay">
                        <ul>
                            <li class="userPhoto"></li>
                            <li><p>Nome do usuário<br><b>Cidade - Estado</b></p></li>
                        </ul>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id feugiat augue. Vivamus id faucibus orci. Pellentesque volutpat nisi eu erat feugiat facilisis facilisis non nisi. Nam a scelerisque lacus. Quisque posuere gravida ante eget porta. Ut tincidunt vestibulum turpis ut congue. Nam dignissim dapibus velit venenatis placerat.
                            </p>
                        <a href="profile.php"><p>Ver perfil</p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sect" id="sectCategories">
            <div class="wrapper">
                <h1>Conheça as categorias</h1>
                <ul id="categories">
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catAction"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catComedy"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catHorror"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catHero"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catBibliography"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catHistory"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catTirinhas"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catFic"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catDrama"></div>
                    </li>
                    <li>
                        <div class='categoriesCover'></div>
                        <div class="icon" id="catSport"></div>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="sect" id="sectStart">
            <div class="wrapper">
                <h1>Comece hoje</h1>
                <p>
                    Descubra novas campanhas de financiamento ou comece sua própria campanha para criar seus projetos.
                </p>
                <button>Explorar campanhas</button>
                <button>Começar campanha</button>
            </div>
        </div>