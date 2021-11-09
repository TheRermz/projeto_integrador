<?php
require_once('connection/connect.php');
if (!isset($_SESSION)) {
    session_start();
}

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
        <form action="login.php" method="POST">
            <img class="mb-2 d-d-inline-block catto-margin" src="../projeto_integrador/assets/img/Therermz_bonfire.png" alt="" width="50" height="50">
            <h1 class="h3 mb-3 fw-normal d-inline-block">Faça o login</h1>

            <div class="form-floating">
                <input type="text" class="form-control my-2" name="username" id="username" placeholder="name@example.com">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="passwd" class="form-control " id="senha" placeholder="Password">
                <label for="passwd">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label class="chbox">
                    <input type="checkbox" class="mb-3 btn btn-group" onclick="showPasswd()"><span data-feather="eye-off" id="passwdIcon" onchange="showPasswd()"></span> Mostrar Senha</button>

                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
            <a href="../projeto_integrador/signup.php" class="text-primary py-1">Não tem conta? Cadastre-se</a>
            <div>
                <?php

                if (isset($_SESSION['emptylogin'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['emptylogin'];
                    echo '</div>';
                    unset($_SESSION['emptylogin']);
                }

                if (isset($_SESSION['register'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['register'];
                    echo '</div>';
                    unset($_SESSION['register']);
                }

                if (isset($_SESSION['banned'])) {
                    echo '<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['banned'];
                    echo '</div>';
                    unset($_SESSION['banned']);
                }

                if (isset($_SESSION['loginerror'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['loginerror'];
                    echo '</div>';
                    unset($_SESSION['loginerror']);
                }

                if (isset($_SESSION['notauth'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['notauth'];
                    echo '</div>';
                    unset($_SESSION['notauth']);
                }

                if (isset($_SESSION['notlogged'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['notlogged'];
                    echo '</div>';
                    unset($_SESSION['notlogged']);
                }

                if (isset($_SESSION['logoff'])) {
                    echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                    echo $_SESSION['logoff'];
                    echo '</div>';
                    unset($_SESSION['logoff']);
                }




                ?>
            </div>

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