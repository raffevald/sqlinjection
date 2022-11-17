<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="device-width, initial-scale=1.0" />
    <title>Pagina Home</title>
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/estilosHome.css">
</head>

<body>
    <section class="seconteiner">
        <div class="bem-vindos">
            <h1>Bem - Vindos !!!</h1>
        </div>
        <hr>
        <div class="menu-home">
            <a href="index.html">SAIR</a>
        </div>
        <div class="logotipo1">
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y  H:i:s');
            ?>
            <br>
            <br><br>

            <img src="imagem/sqlinjection.png" class="logoEmpresa" alt="LE">
        </div>
        
        <hr>
        <br>
       
        <img src="imagem/intraweb_hsa-removebg-preview.png" class="logasist" alt="ls">
</body>

</html>