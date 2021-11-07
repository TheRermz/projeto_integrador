<?php
require_once('../connection/connect.php');
if (isset($_SESSION)) {
    session_start();
}
include('administrator.php');


$sqlusr = "SELECT * FROM users";
$qusr = mysqli_query($con, $sqlusr);
$respusr = mysqli_fetch_assoc($qusr);


$sqlart = "SELECT * FROM articles";
$qart = mysqli_query($con, $sqlart);
$respart = mysqli_fetch_assoc($qart);

#TODO PAGINATION

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

    <!-- <nav class="nav flex-column w-25 float-start py-5 align-content-center">
        <a class="nav-link btn btn-secondary text-white mb-2 active" aria-current="page" href="../user.php?">Usuário</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="../user_edit.php?">Alterar dados</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="../deleteacc.php?user_id=">Cancelar conta</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="addarticle.php">Adicionar Artigo</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="admin.php">Administrativo</a>
    </nav> -->

    <main class="col-12 ms-sm-auto">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2 mx-5">Administração</h1>
        </div>
        <div class="container">
            <?php
            if (isset($_SESSION['admincantchange'])) {
                echo '<div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">';
                echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo $_SESSION['admincantchange'];
                echo '</div>';
                unset($_SESSION['admincantchange']);
            }
            ?>
        </div>

        <h2 class="mx-5">Controle de Artigos</h2>

        <div class="table-responsive mx-5 w-auto">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do Artigo</th>
                        <th scope="col">Publicação</th>

                        <th colspan="2" scope="col">Controle de Artigo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do { ?>
                        <tr>
                            <td><?php echo $respart['article_id'] ?></td>
                            <td><?php echo $respart['article_name'] ?></td>
                            <td><?php $newdate = $respart['reg_date'];
                                $tostr = strtotime($newdate);
                                $newdateDMY = date('d/m/Y', $tostr);
                                echo $newdateDMY ?></td>
                            <td><a href="editarticle.php?article_id=<?php echo $respart['article_id'] ?>">Editar Artigo</a></td>
                            <td><a href="deletearticle.php?article_id=<?php echo $respart['article_id'] ?>">Excluir Artigo</a></td>
                        </tr>
                    <?php } while ($respart = mysqli_fetch_assoc($qart)) ?>
                </tbody>
            </table>
        </div>

        <hr class="my-4">

        <h2 class="mx-5">Controle de Usuários</h2>

        <div class="table-responsive mx-5 w-auto">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Tipo de usuário</th>
                        <th scope="col">Status</th>
                        <th scope="col">Status de Ban</th>
                        <th colspan="2" scope="col">Controle de Usuário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php do { ?><tr>

                            <td><?php echo $respusr['user_id'] ?></td>
                            <td><?php echo $respusr['username'] ?></td>
                            <td><?php echo $respusr['user_type'] ?></td>
                            <td><?php if ($respusr['user_status'] == 1) {
                                    echo 'Ativo';
                                } else {
                                    echo 'Inativo';
                                } ?></td>
                            <td><?php if ($respusr['ban'] == 1) {
                                    echo 'Banido';
                                } else {
                                    echo 'Não banido';
                                } ?></td>
                            <td><a href="admuseredit.php?user_id=<?php echo $respusr['user_id'] ?>">Editar Usuário</a></td>
                            <td><a href="../deleteacc.php?user_id=<?php echo $respusr['user_id'] ?>">Excluir Usuário</a></td>

                        </tr><?php } while ($respusr = mysqli_fetch_assoc($qusr)) ?>
                </tbody>
            </table>
        </div>
    </main>
    </div>
    </div>

    <footer class=" my-5 pt-5 text-muted text-center text-small">
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