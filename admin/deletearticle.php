<?php
require_once('../connection/connect.php');
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <meta name="description" content="Análise de jogos, filmes e séries das quais Murilo Fischer aka Hellmas já assistiu">
    <title>Hellmas once said - Landing Page</title>


</head>

<body>

    <?php
    include('../include/headeradmin.php');
    include('../include/navadmin.php');
    ?>

    <main>



        <div class="album py-5 bg-light">


            <div class="container form-control">
                <p class="h1 pb-2"><?php echo $respc['article_name'] ?></p>
                <p class="h5 pb-2">Artigo adicionado no dia <?php $dpost = $respc['reg_date'];
                                                            $dpostDMY = strtotime($dpost);
                                                            $newdpost = date('d/m/Y', $dpostDMY);
                                                            echo $newdpost ?> às <?php echo $respc['reg_time'] ?></p>
                <hr class="my-4">
                <div class="row row-cols-12 row-cols-sm-2 row-cols-md-3 g-3 py-2 m-1">
                    <div class="d-block w-100">
                        <?php echo $respc['article_content'] ?>
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


    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>