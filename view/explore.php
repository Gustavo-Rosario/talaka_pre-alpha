<?php
session_start();
if(isset($_SESSION['cdUser'])){
    echo "Tu ta logaaado";
}else{
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Explore </title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:100,400,700" rel="stylesheet">
</head>

<body>
     <header>
        <div class="wrapper">
            <div class="userlogin">
                <div id="userloginPhoto"></div>
                <div id="userloginName" style="background-image:url(images/grimgar.jpg)">
                    <p>Nome do usuário</p>
                </div>
            </div>
        </div>
    </header>
    <div id="container">
        <div id="searchText">
            <div class="wrapper">
                <h1>Termo procurado:  "termo"</h1>
            </div>
        </div>

        <div class="wrapper explore">
            <h1> X Resultados foram encontrados</h1>
            <div class="eachProject">
                <div class='eachProjectCover'></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2>Quadrinho de Terror</h2>
                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>
                    
                    <div class="meta">
                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'></div>
                        </div>
                        <ul>
                            <li>90%</li>
                            <li>Aberto até 09/11/2016</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="eachProject">
                <div class='eachProjectCover'></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2>Quadrinho de Terror</h2>
                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>
                    
                    <div class="meta">
                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'></div>
                        </div>
                        <ul>
                            <li>90%</li>
                            <li>Aberto até 09/11/2016</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="eachProject">
                <div class='eachProjectCover'></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2>Quadrinho de Terror</h2>
                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>
                    
                    <div class="meta">
                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'></div>
                        </div>
                        <ul>
                            <li>90%</li>
                            <li>Aberto até 09/11/2016</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="eachProject">
                <div class='eachProjectCover'></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2>Quadrinho de Terror</h2>
                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>
                    
                    <div class="meta">
                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'></div>
                        </div>
                        <ul>
                            <li>90%</li>
                            <li>Aberto até 09/11/2016</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="eachProject">
                <div class='eachProjectCover'></div>
                <div class="eachProjectInfo">
                    <p>tag</p>
                    <h2>Quadrinho de Terror</h2>
                    <p> Projeto de um quadrinho de terror independente. Sua história se passa em 1950 com estranhos desaparecimentos numa cidade antiga, habitada quase que 100% por idosos. </p>
                    
                    <div class="meta">
                        <p><b>R$ 734,00</b> <span>acumulados</span></p>
                        <div class='progressbar'>
                            <div class='progressbarvalue'></div>
                        </div>
                        <ul>
                            <li>90%</li>
                            <li>Aberto até 09/11/2016</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        rodape
    </footer>
</body>

</html>

<?php
}
?>