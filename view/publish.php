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

<div id="formPublish">
    <div class='wrapper'>
        <h1>Preencha com as informações abaixo</h1>
        <p>Os dados informados nessa seção não poderão ser modificados quando o projeto for ao ar. Preencha com atenção e revise antes de lançar o projeto.</p>
        <div id="formProject">
            <form method='post' action=''>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Nome do projeto</p>
                        <p>
                            Dê um nome que as pessoas se lembrem facilmente.
                        </p>
                    </div>
                    <div class='formRight'>
                        <input type='text' name='nameProjeto'>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Descrição</p>
                        <p>Descreva seu projeto da melhor forma possível.</p>
                    </div>
                    <div class='formRight'>
                        <textarea name='descricaoProjeto'></textarea>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Resumo</p>
                        <p>Descreva um resumo do projeto a ser publicado com mais detalhes.</p>
                    </div>
                    <div class='formRight'>
                        <textarea name='resumoProjeto'></textarea>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Meta</p>
                        <p>Digite o valor do objetivo final do projeto. </p>
                    </div>
                    <div class='formRight'>
                        <input type='number'>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Data Final</p>
                        <p>Escolha a data final do projeto.</p>
                    </div>
                    <div class='formRight'>
                        <input type='datetime' name='resumoProjeto'>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Foto de Projeto</p>
                        <p>Selecione uma foto do seu projeto.</p>
                    </div>
                    <div class='formRight'>
                        <input id='ftProjeto' type='file' name='fotoProjeto'>
                        <label for='ftProjeto'>Selecionar foto</label>
                    </div>
                </div>
                <div class='formLine'>
                    <div class='formLeft'>
                        <p>Foto de Capa</p>
                        <p>Selecione uma foto que será a capa do seu projeto.</p>
                    </div>
                    <div class='formRight'>
                        <input id='ftCapa' type='file' name='capaProjeto'>
                        <label for='ftCapa'>Selecionar capa</label>
                    </div>
                </div>
            </div>        
        </div>
        <div id="confirm">
            <button>Salvar</button>
        </div>
    </form>
    
</div>