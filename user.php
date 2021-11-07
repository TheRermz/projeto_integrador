<?php

require_once('connection/connect.php');
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["user_id"]) != '') {
    $user_id = $_SESSION['user_id'];

    $sql = "SELECT * FROM users JOIN country ON users.country_id = country.country_id JOIN br_states ON users.state_id = br_states.state_id WHERE user_id = $user_id";
    $q = mysqli_query($con, $sql);
    $resp = mysqli_fetch_assoc($q);
    #echo $_SESSION["user_id"];
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

    <!-- user control -> admin will have access to everything, editor will not have access to admin page. -->
</head>

<body>

    <?php
    include('../projeto_integrador/include/header.php');
    include('../projeto_integrador/include/nav.php');
    ?>
    <nav class="nav flex-column w-25 float-start py-5 align-content-center">
        <a class="nav-link btn btn-secondary text-white mb-2 active" aria-current="page" href="user.php?">Usuário</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="user_edit.php?user_id=<?php echo $resp['user_id'] ?>">Alterar dados</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="deleteacc.php?user_id=<?php echo $resp['user_id'] ?>">Cancelar conta</a>
        <?php if ($_SESSION["type"] != 'comum') { ?>
            <a class="nav-link btn btn-secondary text-white mb-2" href="admin/addarticle.php">Adicionar Artigo</a>
        <?php } ?>
        <?php if ($_SESSION['type'] == 'administrador') { ?>
            <a class="nav-link btn btn-secondary text-white mb-2" href="admin/admin.php">Administrativo</a>
        <?php } ?>
    </nav>

    <div class="col-12 container py-5">
        <p class="h2">Área do Usuário</p>
        <p>Olá Usuário!</p>
        <div class="row g-3">

            <div class="col-sm-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="<?php echo $resp['user_name'] ?>" readonly>

            </div>

            <div class="col-sm-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="" value="<?php echo $resp['surname'] ?>" readonly>

            </div>

            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" readonly value="<?php echo $resp['username'] ?>">
                </div>
            </div>


            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                <input type="email" class="form-control" id="email" value="<?php echo $resp['email'] ?>" placeholder="seu@email.com" readonly>
            </div>


            <div class="col-6">
                <label for="country" class="form-label">País</label>
                <select class="form-select" id="country" disabled>
                    <option value="<?php echo $resp['country_id'] ?>" selected="selected"><?php echo $resp['country_name_pt'] ?> </option>
                </select>
            </div>

            <div class="col-6">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" disabled>
                    <option value="<?php echo $resp['state_id'] ?>"><?php echo $resp['state_abbr'] ?></option>

                </select>
            </div>

            <p class="h4">Informações adicionais</p>
            <div class="col-5">
                <label for="twitchuser" class="form-label"><span data-feather="twitch"></span> Username na twitch</label>
                <input type="text" class="form-control" id="twitchuser" placeholder="Seu username na twitch" value="<?php echo $resp['twitchuser'] ?>" readonly>

            </div>
            <div class="col-5">
                <label for="twitteruser" class="form-label"><span data-feather="twitter"></span> Username no twitter Twitter</label>
                <input type="text" class="form-control" id="twitteruser" placeholder="informe seu twitter" value="<?php echo $resp['twitteruser'] ?>" readonly>
            </div>
            <div class="col-2">
                <label for="birthdate" class="form-label"><span data-feather="calendar"></span> Data de Nascimento</label>
                <input class="form-control" type="date" name="birthdate" id="birthdate" value="<?php echo $resp['birthdate'] ?>" readonly>

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


        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/misc.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
</body>