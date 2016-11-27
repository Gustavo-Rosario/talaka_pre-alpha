<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
<div id="container">
    <div id="bannerPublish">
        <div id="bannerPublishCover"></div>
        <div class="wrapper">
            <h1>Talaka é uma plataforma para incentivo de quadrinhos nacionais</h1>
            <h2>Inicie sua campanha. Incentive sua arte.</h2>
            <?= (isset($_SESSION['cdUser']))?'<a href="/newProject"><button>Crie sua campanha</button></a>' : '<a href="/signin"><button>Faça Login</button></a>' ;?>
        </div>
    </div>
    <section id="advantages" class='wrapper'>
        <div class="adCard">
            <div class="adIcon">
                 <span class="iconsprite sprite2 sprite-share"></span>
            </div>
            <h3>
                Coletividade
            </h3>
            <p>
                O Talaka possui o princípio de coletividade em sua plataforma. Criar projetos e incentivar a produção de quadrinhos nacionais incentiva o desenvolvimento de produtos e de criar laços com os leitores. Acompanhe, divulgue conheça novos usuários!
            </p>
        </div>
        
        <div class="adCard">
            <div class="adIcon">
                <span class="iconsprite sprite2 sprite-users"></span>
            </div>
            <h3>
                Redes Sociais
            </h3>
            <p>
                Para divulgar sua campanha, utilize as redes sociais para mostrar aos seus amigos o que você está desenvolvendo e, é claro, mostrar mais do seu trabalho! É possível, utilizando o site, linkar o seu perfil pessoal aos produtos e projetos.
            </p>
        </div>
        
        <div class="adCard">
            <div class="adIcon">
                <span class="iconsprite sprite2 sprite-small-light-bulb"></span>
            </div>
            <h3>
                Incentive sua ideia
            </h3>
            <p>
                Use a plataforma para tirar sua ideia do papel. O Talaka adora ideias inovadoras e projetos novos, sendo assim, daremos prioridade em apoiar e mostrar mais os novos autores e novos projetos que são criados e mostrando aos novos usuários projetos ainda não vistos.
            </p>
        </div>
    </section>
    <section id="support">
        <div class='wrapper'>
            <ul>
                <li><span class="iconsprite sprite2 sprite-whatsapp-logo"></span></li>
                <li><span class="iconsprite sprite2 sprite-phone-receiver"></span></li>
                <li><span class="iconsprite sprite2 sprite-mail"></span></li>
            </ul>
            <h3>Atendimento onde e quando você precisar</h3>
            <p>Desenhamos o Talaka para você resolver tudo sozinho. Mas se precisar de ajuda, estamos à disposição como for mais conveniente pra você.</p>
        </div>
    </section>
</div>