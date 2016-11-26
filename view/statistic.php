<!-- <?php
// defined("System-access") or exit("Não permitido o acesso direto");
// ?>
-->
<head>
    <meta charset="UTF-8">
    <link href="/view/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
    <script src='/view/js/jquery.min.js' type='text/javascript'></script>
    <script src='/view/js/script.js' type='text/javascript'></script>
    <title>
        TALAKA - <?= $pag_title ?>
    </title>
</head>

<div id="container" class='statistic' style='margin-top:0'>
    <aside>
        
        <h1>Menu</h1>
        <ul>
            <li>Dashboard <span class='menu' id='icondashboard'></span></li>
            <li>Mensagens <span class='menu' id='iconmessages'></span></li>
            <li>Projetos seguidos <span class='menu' id='iconprojects'></span></li>
        </ul>
    </aside>
    <div id='allStatistic'>
        <div id='time'>
            <div id='fixedMenu'></div>
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
        </div>
        <div id='usersStatistic'>
            <div id='totalUsers' class='divLi'>
                <div class='progressUser'>
                   <label><p>53</p>Usuários do último mês</label>
                    
                    <label><p>53</p>Usuários cadastrados</label>
                    <label><p>53</p>Visitantes</label>
                </div>
            </div>
            
            <div id='totalUsers' class='divLi'>
                <div class='progressUser'>
                   <label><p>53</p>Vezes financiado</label>
                    
                    <label><p>X</p>Nesta semana</label>
                    <label><p>X</p>Neste mês</label>
                </div>
            </div>
        </div>
        
    </div>
</div>