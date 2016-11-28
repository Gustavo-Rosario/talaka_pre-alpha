<?php
defined("System-access") or header('location: /error');
   $dataPoints = array();
    for($i = 0; $i < count($stats) - 1; $i ++){
        $dataPoints[] = array("y" => $stats["d".$i]->y,"indexLabel"=>$stats["d".$i]->index, "label" => $stats["d".$i]->index );
    }
?>
   <script src="/view/js/canvasjs.min.js"></script>
   <div id="container" class='statistic' style='margin-top:0'>
    <!--<aside>-->
    <!--    <h1>Menu</h1>-->
    <!--    <ul>-->
    <!--        <li>Dashboard <span class='menu' id='icondashboard'></span></li>-->
    <!--        <li>Mensagens <span class='menu' id='iconmessages'></span></li>-->
    <!--        <li>Projetos seguidos <span class='menu' id='iconprojects'></span></li>-->
    <!--    </ul>-->
    <!--</aside>-->
    <div id='allStatistic' style="z-index:2">
        <div id="chartContainer" style="width:100%;height:400px; z-index: 9; position: relative; margin-left: auto; margin-right: auto"></div>
        <!--<div id='time'>
            <!--<div id='fixedMenu'></div>
            <div id='activities'>
                
                <h1>Atividades</h1>
                <ul>
                    <li>
                        <p><b>Usuário</b> apoiou seu projeto em R$ 100,00;</p>
                        <span>48 mins</span>
                    </li>
                    <li>
                        <p><b>Usuário</b> apoiou seu projeto em R$ 100,00;</p>
                        <span>48 mins</span>
                    </li>
                    <li>
                        <p><b>Usuário</b> apoiou seu projeto em R$ 100,00;</p>
                        <span>48 mins</span>
                    </li>
                    <li>
                        <p><b>Usuário</b> apoiou seu projeto em R$ 100,00;</p>
                        <span>48 mins</span>
                    </li>
                    <li>
                        <p><b>Usuário</b> apoiou seu projeto em R$ 100,00;</p>
                        <span>48 mins</span>
                    </li>
                </ul>
            </div>
        </div>-->
        <div id='usersStatistic'>
            <div id='totalUsers' class='divLi'>
                <div class='progressUser'>
                    <script type="text/javascript">

    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "theme4",
            zoomEnabled: true,
            animationEnabled: true,
            title: {
                text: "Talaka - Analytics"
            },
            axisX: {
					interval: 10
				},
            subtitles: [
                {
                    text: "Finacimentos ao longo do tempo"
                }
            ],
            data: [
            {
                type: "column",
				indexLabelLineThickness: 2,
                dataPoints: <?= json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });
        chart.render();
    });
</script>
                   <label><p><?= $stats['qt'];?></p>Visualizações de usuários</label>
                   
                </div>
            </div>
            
            <div id='totalUsers' class='divLi'>
                <div class='progressUser'>
                    <label><p style='text-align:center; font-size:2em'>R$ <?= $stats['collected'];?>,00 acumulados </p></label>
                   <label><p><?= $stats['total'];?></p>Vezes financiado</label>
                    <label><p>X</p>Nesta semana</label>
                    <label><p>X</p>Neste mês</label>
                </div>
            </div>
        </div>
        
    </div>
</div>