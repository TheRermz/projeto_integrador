<?php
require_once('connection/connect.php');
// if ($con !== mysqli_connect_error()) {
//     echo 'foi' . mysqli_connect_error($con);
// } else {
//     echo 'num foi' . mysqli_connect_error($con);
// }

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/signin.css">

    <meta name="description" content="Análise de jogos, filmes e séries das quais Murilo Fischer aka Hellmas já assistiu">
    <title>Hellmas once said - Sign In</title>


</head>

<body>

    <?php
    include('include/header.php');
    include('include/nav.php');
    ?>

    <div id="signinform" class="d-flex justify-content-center">
        <form>
            <img class="mb-2 d-d-inline-block catto-margin" src="../projeto_integrador/assets/img/Therermz_bonfire.png" alt="" width="50" height="50">
            <h1 class="h3 mb-3 fw-normal d-inline-block">Faça o login</h1>

            <div class="form-floating">
                <input type="text" class="form-control my-2" id="username" placeholder="name@example.com">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control " id="senha" placeholder="Password">
                <label for="passwd">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label class="chbox">
                    <input type="checkbox" class="mb-3 btn btn-group" onclick="showPasswd()"><span data-feather="eye-off" id="passwdIcon" onchange="showPasswd()"></span> Mostrar Senha</button>

                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            <a href="../projeto_integrador/signup.php" class="text-primary py-1">Não tem conta? Cadastre-se</a>

        </form>
    </div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <div class="container">
            <p class="float-end mb-1">
                <button onclick="gotoTop()" id="t" class="text-primary" title="volta ao topo da página">Voltar ao Topo da página</button>
            </p>
            <p class="mb-1"> &copy; <a href="https://www.linkedin.com/in/mfischer-1997/" target="_blank" class="text-pirmary">Murilo Fischer</a> - Todos os direitos Reservados - <span class="text-primary"> 2021</span> </p>

        </div>
    </footer>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://unpkg.com/feather-icons"></script>



</body>

</html>