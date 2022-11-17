<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="device-width, initial-scale=1.0" />
    <title>Pagina Login</title>
    <link rel="stylesheet" href="styles/estilos.css">
</head>

<body>
    <div class="container">
        <div id="formContent">
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            echo date('d/m/Y  H:i:s');
            ?>
            <div class="logotipo">
                <img src="imagem/JM_SOM_MUSIC-removebg-preview.png" class="logo" alt="logoEmpresa">
            </div>

            <?php

            // campos recebidos por post
           $user = $_POST["user"];
            $senha = $_POST["senha"];

            //TRATAMENTO DE ENTRADA (corrigindo o erro)
            //$user = preg_replace('/[^[:alnum:]_.-]/', '', $user);
            //$senha = addslashes($senha);

            //conexão ao banco de dados
            $conexao = mysqli_connect("localhost", "root", "");
            mysqli_select_db($conexao, "sqli_bd");
           
           
           //CONSULTA NO BANCO DE DADOS
            $resultado = mysqli_query($conexao, "SELECT * FROM login where user='$user' AND senha='$senha' ");
            $linha = mysqli_num_rows($resultado);

            //Verificando de todos os campos foram preenchidos
            if (isset($_POST) and !empty($_POST)) :
                $preechido = 0;

                foreach ($_POST as $key => $field) {
                    if (empty($field)) :
                        echo '<b>Preencha o Campo '  . $key . '</b><br>';

                        $preechido = 0;
                    else :
                        $preechido = 1;
                    endif;
                }

                //verificando se as credenciais estao corretas

                
                if ($linha): 

                    //se entrou com sucesso, executa a partir daqui suas ações
                    $linha = mysqli_fetch_array($resultado);
                echo 'Usuario Logado';

                  header('Location:home.php');
                else :
                   
                   
                   echo 'Usuario ou senha incorretos';

                endif;
            endif;

            ?>

            <form action="" method="post">
                <input type="text" id="login" class="fadeIn second" name="user" placeholder="Usuario">
                <input type="password" id="password" class="fadeIn third" name="senha" placeholder="Senhar">
                <input type="submit" class="fadeIn fourth" value="Acessar">
            </form>
            <img src="imagem/intraweb_hsa-removebg-preview.png" class="rodape" alt="sistema">
        </div>
    </div>
</body>
</html>