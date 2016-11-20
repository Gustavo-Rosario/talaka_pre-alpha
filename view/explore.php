<?php
session_start();
?>
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