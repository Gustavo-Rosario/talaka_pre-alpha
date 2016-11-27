<?php
defined("System-access") or exit("Não permitido o acesso direto");
?>
<div id='container' class='bg'>
    <div class='wrapper' id='profileAlter'>
        <div id='profileUser'>
            <h1>Perfil</h1>
            <div id='alterPhoto' <?= 'style="background-image: url(/user-img/'.$img.')"';?>></div>
            <h2><?= $nome;?></h2>
            <h3>@<?= $login;?></h3>
            
            <ul>
                <li>
                    <p><span>86</span><br> Projetos apoiados</p>
                </li>
                <li>
                    <p><span>86</span><br> Projetos cadastrados</p>
                </li>
            </ul>
            <form method='post' action=''>
                <label for='upload'>Upar novo avatar</label>
                    <input type='file' id='upload'>
                    <input type='button' value='Excluir conta'>
            </form>
            <div id='biography'>
                <h1>
                    Biografia
                </h1>
                <p><?= $biography;?></p>
            </div>
        </div>
        
        <div id='profileInfos'>
            <h1>Informações básicas</h1>
            <form>
                <label for='alternome'>Nome Completo</label>
                    <input id='alternome' type='text' placeholder='nome atual do usuário' <?= 'value="'.$nome.'"';?>>
                <label for='alterlogin'>Login</label>
                    <input id='alterlogin' type='text' placeholder='login atual do usuário' <?= 'value="'.$login.'"';?>>
            
            <h1>Sobre mim</h1>
            <label for='alterbiography'>Biografia</label>
            <textarea id='alterbiography' placeholder='Biografia atual do usuário'><?= $biography;?></textarea>
            
            <h1>Links Externos</h1>
            <label for='alterfacebook'>URL do Facebook</label>
                <input type='text' id='alterfacebook' placeholder='Facebook atual'>
                
            <label for='altertwitter'>URL do Twitter</label>
                <input type='text' id='altertwitter' placeholder='Twitter atual'>
                
            <label for='alterinstagram'>URL do Instagram</label>
                <input type='text' id='alterinstagram' placeholder='Instagram atual'>
            
            <label for='alterlinkedin'>URL do Linkedin</label>
                <input type='text' id='alterlinkedin' placeholder='Linkedin atual'>
            
            
            <h1>Segurança</h1>
            <label for='altersenha'>Senha</label>
                <input type='password' id='altersenha' placeholder='******'>
            </form>
            
            <button id="save">Salvar</button>
            
        </div>
    </div>
</div>