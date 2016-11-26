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
            <div class="adIcon"></div>
            <h3>
                Vantagem 1
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique ex et justo cursus, vel sollicitudin dolor lacinia. Quisque non aliquet nibh. Vestibulum quis libero tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam vehicula libero vitae tincidunt tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
            </p>
        </div>
        
        <div class="adCard">
            <div class="adIcon"></div>
            <h3>
                Vantagem 2
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique ex et justo cursus, vel sollicitudin dolor lacinia. Quisque non aliquet nibh. Vestibulum quis libero tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam vehicula libero vitae tincidunt tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
            </p>
        </div>
        
        <div class="adCard">
            <div class="adIcon"></div>
            <h3>
                Vantagem 3
            </h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique ex et justo cursus, vel sollicitudin dolor lacinia. Quisque non aliquet nibh. Vestibulum quis libero tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam vehicula libero vitae tincidunt tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
            </p>
        </div>
    </section>
    <section id="support">
        <div class='wrapper'>
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <h3>Atendimento onde e quando você precisar</h3>
            <p>Desenhamos o Talaka para você resolver tudo sozinho. Mas se precisar de ajuda, estamos à disposição como for mais conveniente pra você.</p>
        </div>
    </section>
</div>