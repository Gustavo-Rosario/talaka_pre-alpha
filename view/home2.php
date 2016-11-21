<style>
        a:hover{
           color: #D50C7E; 
        }
    </style>
<div id="container">
        <div id="carousel">
            <div id="carouselWrapper">
                
                <?php
                for($a = 1; $a <= (count($data)); $a++){ 
                ?>
                <div class="carouselEach">
                    <div class="carouselCover" <?php echo 'style="background-size:cover;background-image:url(../../proj-img/'.$data['d'.$a]->imgB.')"' ?>></div>
                    <div class="projectIndex">
                        <div class="btns">
                            <span>left</span>
                            <span>right</span>
                        </div>
                        <h1>
                            <?= $data['d'.$a]->title;?>
                        </h1>
                        <div class="projectH2">
                            <div class="projectOwner" <?php echo 'style="background-image:url(../../user-img/'.$data['d'.$a]->imgU.')"' ?>></div>
                            <h2><?= $data['d'.$a]->creator;?></h2>
                        </div>
                        <ul>
                            <li>
                                <span class="icon icon2" id="iconMeta"></span><b>Meta</b>
                              <div class="circular-progress"></div>
                            </li>
                            <li>
                            <span class="icon icon2" id="iconResume"></span><b>Descrição</b>
                                <p><?= $data['d'.$a]->ds;?></p>
                            </li>
                        </ul>
                    </div>
                    <div class="projectIndexInfo">
                        <div class='projectIndexCover' <?php echo 'style="background-image:url(../../proj-img/'.$data['d'.$a]->img.')"' ?>></div>
                        <a <?= 'href="/project/'. $data['d'.$a]->id.'"' ?>><p> Conhecer projeto</p></a>
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
                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="eachProject">
                                <div class='eachProjectCover'>
                                    <a href="profile.php">
                                        <div class="projectOwner"></div>
                                    </a>
                                </div>
                                <div class="eachProjectInfo">
                                    <p>tag</p>
                                    <h2>Quadrinho de Terror</h2>
                                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>

                                    <div class="meta">
                                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                                        <div class='progressbar'>
                                            <div class='progressbarvalue'></div>
                                        </div>
                                        <ul>
                                            <li>90%</li>
                                            <li>Aberto até 09/11/2016</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
                        <div class="icon" id="catAction"></div>
                    </li>
                    <li>
                        <div class="icon" id="catComedy"></div>
                    </li>
                    <li>
                        <div class="icon" id="catHorror"></div>
                    </li>
                    <li>
                        <div class="icon" id="catHero"></div>
                    </li>
                    <li>
                        <div class="icon" id="catBibliography"></div>
                    </li>
                    <li>
                        <div class="icon" id="catHistory"></div>
                    </li>
                    <li>
                        <div class="icon" id="catTirinhas"></div>
                    </li>
                    <li>
                        <div class="icon" id="catFic"></div>
                    </li>
                    <li>
                        <div class="icon" id="catDrama"></div>
                    </li>
                    <li>
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