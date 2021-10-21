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
    <script src="https://unpkg.com/feather-icons"></script>
    <meta name="description" content="Análise de jogos, filmes e séries das quais Murilo Fischer aka Hellmas já assistiu">
    <title>Hellmas once said - Landing Page</title>


</head>

<body>

    <?php
    include('include/header.php');
    include('include/nav.php');
    ?>

    <main>



        <div class="album py-5 bg-light">

            <div class="container">
                <h1 class="h2">Sobre mim</h1>
                <div class="w-25 d-inline-block">
                    <img src="../projeto_integrador/assets/img/elmurilo.jpg" alt="" width="100%" height="100%">
                    <p class="align-content-center">
                        <i>Eu aí :)</i>
                    </p>
                </div>
                <div class="w-50 float-end">
                    <h1 class="title"><i>Eu, Murilo Fischer</i></h1>
                    <div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique illo repudiandae suscipit, eos architecto pariatur molestias ut excepturi sed quo natus illum dignissimos fugit. Blanditiis magnam ex soluta facere impedit!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique illo repudiandae suscipit, eos architecto pariatur molestias ut excepturi sed quo natus illum dignissimos fugit. Blanditiis magnam ex soluta facere impedit!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique illo repudiandae suscipit, eos architecto pariatur molestias ut excepturi sed quo natus illum dignissimos fugit. Blanditiis magnam ex soluta facere impedit!</p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
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
</body>

</html>