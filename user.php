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
        <a class="nav-link btn btn-secondary text-white mb-2" href="user_edit.php?">Alterar dados</a>
        <a class="nav-link btn btn-secondary text-white mb-2" href="deleteacc.php?user_id=">Cancelar conta</a>
        <!-- if user !== comum -->
        <a class="nav-link btn btn-secondary text-white mb-2" href="admin/addarticle.php">Adicionar Artigo</a>
        <!-- if user === administrativo -->
        <a class="nav-link btn btn-secondary text-white mb-2" href="admin/admin.php">Administrativo</a>
    </nav>

    <div class="col-12 container py-5">
        <p class="h2">Área do Usuário</p>
        <p>Olá Usuário!</p>
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="" value="" readonly>

            </div>

            <div class="col-sm-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="" value="" readonly>

            </div>

            <div class="col-12">
                <label for="username" class="form-label">Username</label>
                <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" readonly>
                </div>
            </div>


            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                <input type="email" class="form-control" id="email" placeholder="seu@email.com" readonly>
            </div>


            <div class="col-6">
                <label for="country" class="form-label">País</label>
                <select class="form-select" id="country" disabled>
                    <option value="select" selected="selected">Selecione um país...</option>
                </select>
            </div>

            <div class="col-6">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" disabled>
                    <option value="">Selecione seu estado...</option>

                </select>
            </div>

            <p class="h4">Informações adicionais</p>
            <div class="col-5">
                <label for="twitchuser" class="form-label"><span data-feather="twitch"></span> Username na twitch</label>
                <input type="text" class="form-control" id="twitchuser" placeholder="Seu username na twitch" readonly>

            </div>
            <div class="col-5">
                <label for="twitteruser" class="form-label"><span data-feather="twitter"></span> Username no twitter Twitter</label>
                <input type="text" class="form-control" id="twitteruser" placeholder="informe seu twitter" readonly>
            </div>
            <div class="col-2">
                <label for="birthdate" class="form-label"><span data-feather="calendar"></span> Data de Nascimento</label>
                <input class="form-control" type="date" name="birthdate" id="birthdate" readonly>

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