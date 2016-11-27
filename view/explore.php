<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
    <div id="container">
        <div id="searchText">
            <div class="wrapper">
                <h1><?= $data['termo'];?></h1>
            </div>
        </div>

        <div class="wrapper explore">
            <h1> <?= $data['total'];?> Resultados foram encontrados</h1>
            <?php
                $numPag = ($data['total'] == 1)? 1 : round($data['total'] / 6);
                for($a = 0; $a < (count($data) - 2); $a++){ 
                    $percent = (($data['d'.$a]->collected) * 100)/ $data['d'.$a]->meta;
            ?>
            <a <?= 'href="https://'.$_SERVER['HTTP_HOST'].'/project/'.$data['d'.$a]->id.'"';?>>
            <div class="eachProject">
                <div class='eachProjectCover' <?php echo 'style="background-image:url(/proj-img/'.$data['d'.$a]->img.')"' ?>>
                    <div class="projectOwner" <?php echo 'style="background-image:url(/user-img/'.$data['d'.$a]->imgU.')"' ?>></div>
                </div>
                <div class="eachProjectInfo">
                    <p><?= System::getCategory($data['d'.$a]->idC);?></p>
                    <h2><?= $data['d'.$a]->title;?></h2>
                    <p> <?=  (strlen($data['d'.$a]->ds) > 300)? substr($data['d'.$a]->ds,0,300)." (...)" : $data['d'.$a]->ds;
                    ?> </p>
                    
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
            <ul id='listProjects'>
                <?php
                    for($i=1;$i<=$numPag;$i++){
                        echo "<a href='/explore/name/".explode('"',$data['termo'])[1]."/".$i."'><li>".$i."</li></a>";
                    }
                ?>
                
            </ul>
        </div>
    </div>