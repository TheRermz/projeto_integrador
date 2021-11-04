<?php
require_once('../connection/connect.php');
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

    <nav class="nav flex-column w-25 float-start py-5 align-content-center">
        <a class="nav-link btn btn-secondary text-white mb-2 active" aria-current="page" href="../user.php?">Usuário</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="../user_edit.php?">Alterar dados</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="../deleteacc.php?user_id=">Cancelar conta</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="addarticle.php">Adicionar Artigo</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="admin.php">Administrativo</a>
    </nav>

    <main class="col-12 ms-sm-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Administração</h1>
        </div>

        <h2>Section title</h2>




        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>

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