<?php
defined("System-access") or header('location: /error');
?> 
    <script type="text/javascript" src="/view/js/visit.js"></script>
    <?= '<span id="projectID" style="display:none">'.$id.';</span>';?>
    <?php   if (isset($_SESSION['cdUser'])){ ?>
    <div id='financeWrapper'>
        <div id="financeClose"></div>
        <div id='financeProject'>
            <div id='financeCover' <?php echo 'style="background-image: url(../proj-img/'.$img.');"'; ?>></div>
            <div>
                <h2>
                    Financiar o projeto <?= $title ; ?>
                </h2>
                <h3>
                    Escolha a forma de pagamento:
                </h3>
                
                    <form method='post'>
                        <input type='radio' name='pag' id='visa'>
                        <label class='visa' for='visa'></label>
                        
                        <input type='radio' name='pag' id='mastercard'>
                        <label class='mastercard' for='mastercard'></label>
                        
                        <input type='radio' name='pag' id='american'>
                        <label class='american' for='american'></label>
                        
                        <input type='radio' name='pag' id='hiper'>
                        <label class='hiper' for='hiper'></label>
                <h3>
                    Termos de compromisso
                </h3>
                <div id='termcom'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nibh elit, a cursus lacus tempor id. In et odio at turpis cursus vulputate. Nam sit amet vulputate dui. Proin ut rhoncus dolor. Proin in mi et metus scelerisque accumsan eu interdum odio. Donec elementum consectetur molestie. Nam pulvinar turpis elit, ac finibus nulla venenatis sed. Morbi eget leo nec velit elementum egestas posuere non turpis.

Nam massa nunc, mollis eget nibh nec, ultrices laoreet nibh. In enim urna, pellentesque ut semper quis, porttitor a urna. Sed porttitor accumsan sem vel gravida. Praesent sed mauris erat. Proin finibus ex eget libero tristique, feugiat varius dolor tempus. Nunc rutrum commodo facilisis. Integer eget lorem quis nisi fermentum scelerisque a et ipsum. Suspendisse vitae dolor non nunc lobortis mattis. Proin tincidunt eleifend odio, sit amet fringilla purus maximus vitae. Vestibulum molestie pulvinar mi, eget ultrices tellus efficitur et. Donec luctus neque in metus blandit euismod. Donec cursus ac velit et ullamcorper. Aenean eu elementum dolor, imperdiet suscipit dolor. Aenean tellus tellus, condimentum et purus ornare, scelerisque dignissim justo. Donec ornare porttitor efficitur. Aenean rutrum blandit arcu, sit amet varius elit lobortis sed
                </div>
                </form>
                <div id='lineForm'>
                    <input type='number' id='valor' name='valor' placeholder='Ex: 10,00'>
                    <button id='apoiar' <?= 'onclick="fin('.$id.')"' ;?>>
                        Apoiar
                    </button>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    
    <div id='projectPageCover'  <?= 'style="background-image:url(../../proj-img/'.$cover.')"' ?>>
        <div id='projectPageCoverColour'></div>
    </div>
    
    <div id='container'>
    <main style='margin-top:40px'>
        <section id="projectInfo">
            <div id="project" class="column columnLeft">
                <div id="projectCover" <?php echo 'style="background-image: url(../proj-img/'.$img.'); background-size:cover"'; ?>>
                    <a href='/profile/<?= $usuario ?>'><div id='projectOwner' <?php echo 'style="background-image: url(../user-img/'.$imgU.'); background-size:cover"'; ?>></div></a>
                </div>
                <div id="projectInformations">
                    <h1><?= $title; ?></h1>
                    <h2>por <a href='/profile/<?= $usuario ?>'> <?= $creator;?></a></h2>

                    <p>
                         <?= $ds; ?>
                    </p>
                </div>
            </div>
            <div id="finance" class="column columnRight">
                <div id="goal">
                    <h1 id='goal'>R$<?= $collected ?>,00 <br><span>Investidos de R$<?= $meta ?>,00</span></h1>
                    <?php
                    if($close == 1){
                        echo "<h2>Projeto finalizado</h2>";
                        ?>
                        <h2><?= $total; ?> financiamentos</h2>
                    </div>
                    <?php
                    }else{
                        echo"<h2>". round( ( strtotime($dtF) - strtotime(date("Y-m-d")) ) / (60 * 60 * 24) ) . " dias restantes
                        <br><span>". implode("/", array_reverse(explode("-",$dtB)) )." à ".implode("/", array_reverse(explode("-",$dtF)) ) ."</span></h2>";
                    ?>
                    <h2><?= $total; ?> financiamentos</h2>
                </div>
                <?= ($_SESSION['cdUser'] === $creID)? '<a href="/statistic/'.$id.'"><button id="btn_finance"><span class="iconsprite sprite sprite-like"></span>Dados Estatísticos</button></a>': ( (!isset($_SESSION['cdUser']))?'<button id="btn_finance" onclick=\'alert( "Faça Login para Financiar" )\'>  <span class="iconsprite sprite sprite-like"></span>  Financiar</button>' : '<button id="btn_finance" onclick="showFin()">  <span class="iconsprite sprite sprite-like"></span>  Financiar</button>');?> 
                <?php } ?>
                <a target='_blank' href='../proj-pdf/twd.pdf'>
                    <button id="btn_demo"><span class="iconsprite sprite sprite-eye"></span>Visualizar Demonstração</button>
                </a>


                <div id="socialnetwork">
                    <h1>Redes sociais</h1>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
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
                    <h1>  <span class="iconsprite sprite sprite-paper"></span> Conheça o projeto <?= $title ; ?> </h1>
                    <p>
                       <?= $resume ?>
                    </p>
                </div>
            </div>
            <div id="reward" class="column columnRight">
                <h1>Recompensa</h1>
                <div class="eachReward">
                    <h3>R$ 30,00</h3>
                    <h4>5 apoiadores</h4>
                    <p>Phasellus nibh nibh, auctor ac vestibulum ut, vestibulum eu ipsum. Curabitur mollis risus a purus vestibulum semper. Morbi nibh elit, facilisis non efficitur et, scelerisque vel lorem. Donec sed massa libero. Maecenas gravida efficitur nisl, in maximus purus dictum et.</p>
                </div>

                <div class="eachReward">
                    <h3>R$ 20,00</h3>
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
</div> 