<?php
require_once('connection/connect.php');
$sqla = "SELECT articles.article_name, articles.abstract, articles.reg_time, articles.reg_date, images.image JOIN  images ON articles.image_id = images.image_id WHERE id_article DESC LIMIT 10";
$qa = mysqli_query($con, $sqla);
$resp = mysqli_fetch_assoc($qa);

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
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <p class="h1">Artigos recentes</p>
                        <?php do { ?>
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text"><?php echo $resp['abstract'] ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="indexlink" href="article.php?article_id=<?php echo $resp['article_id'] ?> "><button type="button" class="btn btn-sm btn-outline-secondary">Veja Mais</button></a>

                                            <!-- if user !== comum  -->
                                            <a class="indexlink mx-1" href="admin/addarticle.php?article_id=<?php echo $resp['article_id'] ?> "><button type="button" class="btn btn-sm btn-outline-secondary">Editar</button></a> <!-- acesso apenas por editor/admin -->
                                        </div>
                                        <small class="text-muted"><?php echo 'Artigo publicado às ' . $resp['reg_time'] ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php } while ($resp = mysqli_fetch_assoc($qa)) ?>
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