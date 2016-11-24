<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
     
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
                        <label for='visa'></label>
                        
                        <input type='radio' name='pag' id='mastercard'>
                        <label for='mastercard'></label>
                        
                        <input type='radio' name='pag' id='american'>
                        <label for='american'></label>
                        
                        <input type='radio' name='pag' id='hiper'>
                        <label for='hiper'></label>
                <h3>
                    Termos de compromisso
                </h3>
                <textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porta nibh elit, a cursus lacus tempor id. In et odio at turpis cursus vulputate. Nam sit amet vulputate dui. Proin ut rhoncus dolor. Proin in mi et metus scelerisque accumsan eu interdum odio. Donec elementum consectetur molestie. Nam pulvinar turpis elit, ac finibus nulla venenatis sed. Morbi eget leo nec velit elementum egestas posuere non turpis.

Nam massa nunc, mollis eget nibh nec, ultrices laoreet nibh. In enim urna, pellentesque ut semper quis, porttitor a urna. Sed porttitor accumsan sem vel gravida. Praesent sed mauris erat. Proin finibus ex eget libero tristique, feugiat varius dolor tempus. Nunc rutrum commodo facilisis. Integer eget lorem quis nisi fermentum scelerisque a et ipsum. Suspendisse vitae dolor non nunc lobortis mattis. Proin tincidunt eleifend odio, sit amet fringilla purus maximus vitae. Vestibulum molestie pulvinar mi, eget ultrices tellus efficitur et. Donec luctus neque in metus blandit euismod. Donec cursus ac velit et ullamcorper. Aenean eu elementum dolor, imperdiet suscipit dolor. Aenean tellus tellus, condimentum et purus ornare, scelerisque dignissim justo. Donec ornare porttitor efficitur. Aenean rutrum blandit arcu, sit amet varius elit lobortis sed
                </textarea>
                </form>
                <div id='lineForm'>
                    <input type='number' name='valor' placeholder='Ex: 10,00'>
                    <button <?= 'onclick="fin('.$id.')"' ;?>>
                        Apoiar
                    </button>
                </div>
                
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div id='container'>
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
</div> 