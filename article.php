<?php
require_once('connection/connect.php');
$sqla = "SELECT articles.article_id, articles.article_name, articles.abstract, articles.reg_time, articles.reg_date FROM articles order by article_id DESC LIMIT 10
";
$qa = mysqli_query($con, $sqla);
$resp = mysqli_fetch_assoc($qa);
if (isset($_GET["article_id"]) && $_GET["article_id"] !== '') {
    $id = $_GET["article_id"];
    $sqlc = "SELECT articles.article_id, articles.article_name, articles.abstract, articles.reg_time, articles.reg_date, article_content FROM articles where article_id = $id";
    $qc = mysqli_query($con, $sqlc);
    $respc = mysqli_fetch_assoc($qc);
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
            <!-- php loop [do while] to load all articles [still an idea > make a featured article] -->

            <div class="container">
                <p class="h1 pb-2">Artigos recentes</p>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


                    <div class="col">

                        <div class="d-flex justify-content-center">
                            <div>
                                <p class="align-content-center h2"><?php $respc['article_name'] ?></p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </main>

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
</body>

</html>