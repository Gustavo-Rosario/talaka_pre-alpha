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

<div id='container' class='bg'>
    <div class='wrapper' id='profileAlter'>
        <div id='profileUser'>
            <h1>Perfil</h1>
            <div id='alterPhoto'></div>
            <h2>José Luiz Reis</h2>
            <h3>@login</h3>
            
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
                <p>Lore ipsum dolor sit amrmet, consecterur adelit. Sed a pulvinar justo aliquam interdum dolor. Mauris id congue metus. Curabitur ferme dapibus dapibus.</p>
            </div>
        </div>
        
        <div id='profileInfos'>
            <h1>Informações básicas</h1>
            <form method='post' action=''>
                <label for='alternome'>Nome completo</label>
                    <input id='alternome' type='text' placeholder='nome atual do usuário'>
                <label for='alterlogin'>Login</label>
                    <input id='alterlogin' type='text' placeholder='login atual do usuário'>
            
            <h1>Sobre mim</h1>
            <label for='alterbiography'>Biografia</label>
            <textarea id='alterbiography' placeholder='Biografia atual do usuário'></textarea>
            
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
                
                <button>Salvar</button>
            </form>
            
        </div>
    </div>
</div>