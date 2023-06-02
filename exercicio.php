<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Recursos/css/stilo.css">
    <link rel="stylesheet" href="Recursos/css/exercicio.css">
</head>
<body class="exercicio">
    <heder class="cabecalho">
        <h1>Exercício A</h1>
        <h2>Visualisação do Exercício</h2>
    </heder>
    <nav class="navegacao">
        <a href="Basico/ola.php" class="verde">Sem Formatacao</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include('Basico/ola.php')
            ?>

        </div>
    </main>
    <footer class="rodape">Designed by Thales Fuckner - <?=date('y') ?> </footer>
    
</body>
</html>