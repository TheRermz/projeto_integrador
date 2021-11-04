<?php
require_once('connection/connect.php');
if (!isset($_SESSION)) {
    session_start();
}

$sqlc = "SELECT * FROM country";
$qc = mysqli_query($con, $sqlc);
$respc = mysqli_fetch_assoc($qc);

$sqls = "SELECT * FROM br_states";
$qs = mysqli_query($con, $sqls);
$resps = mysqli_fetch_assoc($qs);

if (isset($_GET["user_id"]) != '') {
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM users JOIN country ON users.country_id = country.country_id JOIN br_states ON users.state_id = br_states.state_id JOIN paswd ON users.user_id = paswd.user_id WHERE users.user_id = $user_id";
    $q = mysqli_query($con, $sql);
    $resp = mysqli_fetch_assoc($q);
    $passwd = $resp['passwd'];



    if (isset($_POST["update"])) {
        $id = $resp['user_id'];
        $name = mysqli_real_escape_string($con, $_POST["user_name"]);
        $surname = mysqli_real_escape_string($con, $_POST["surname"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $novasenha = mysqli_real_escape_string($con, $_POST["newpasswd"]);
        $novasenhamd5 = md5(mysqli_real_escape_string($con, $_POST["newpasswd"]));;
        $country = mysqli_real_escape_string($con, $_POST["country"]);
        $state = mysqli_real_escape_string($con, $_POST["state"]);
        $twitch = mysqli_real_escape_string($con, $_POST["twitchuser"]);
        $twitter = mysqli_real_escape_string($con, $_POST["twitteruser"]);
        $birthdate = $_POST["birthdate"];

        $sqlupdate = "UPDATE users SET user_name = '$name', surname = '$surname', md5_passwd = '$novasenhamd5', email = '$email', twitchuser = '$twitch', twitteruser = '$twitter', country_id = $country, state_id = $state, birthdate = '$birthdate' WHERE user_id = $id ";
        $sqlpasswdupdate = "UPDATE paswd SET passwd = '$novasenha' WHERE user_id = $id";
        if (mysqli_query($con, $sqlupdate) && mysqli_query($con, $sqlpasswdupdate)) {
            header('Location:user.php');
            echo 'Usuário atualizado com sucesso';
        } else {
            header('location:index.php');
            echo 'erro';
        }
    }
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
        <form class="needs-validation" novalidate method="post">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="" name="user_name" value="<?php echo $resp['user_name'] ?>">
                </div>

                <div class="col-sm-6">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" placeholder="" name="surname" value="<?php echo $resp['surname'] ?>">

                </div>

                <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $resp['username'] ?>" readonly>
                    </div>
                </div>


                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com" value="<?php echo $resp['email'] ?>">
                </div>

                <div class="col-5">
                    <label for="passwd" class="form-label">Senha atual</label>
                    <div class="input-group has-validation">
                        <input type="password" class="form-control" id="passwd" placeholder="Senha" name="passwd">
                        <div class="invalid-feedback">
                            Favor insira a sua senha.
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <label for="newpasswd" class="form-label">Nova Senha</label>
                    <div class="input-group has-validation">
                        <input name="newpasswd" type="password" class="form-control" id="newpasswd" placeholder="Nova Senha">

                        <div class="invalid-feedback">
                            Favor repetir a senha.
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <label>&nbsp;</label>
                    <div class="checkbox">
                        <label class="chbox mt-3">
                            <input type="checkbox" class="btn btn-group" onclick="showPasswd()"><span data-feather="eye-off" id="passwdIcon" "></span> Mostrar Senha</button>

                        </label>
                    </div>
                </div>


                <div class=" col-6">
                                <label for="country" class="form-label">País</label>
                                <select name="country" class="form-select" id="country">
                                    <?php do { ?>

                                        <option value="<?php echo $respc['country_id']; ?>" <?php if ($respc['country_id'] === $resp['country_id']) {
                                                                                                echo "selected";
                                                                                            } ?>><?php echo $respc['country_name_pt']; ?></option>

                                    <?php } while ($respc = mysqli_fetch_assoc($qc)); ?>
                                </select>
                    </div>

                    <div class="col-6">
                        <label for="state" class="form-label">Estado</label>
                        <select name="state" class="form-select" id="state">
                            <?php do { ?>
                                <option value="<?php echo $resps['state_id'] ?>" <?php if ($resps['state_id'] === $resp['state_id']) {
                                                                                        echo "selected";
                                                                                    } ?>><?php echo $resps['state_abbr'] ?></option>
                            <?php } while ($resps = mysqli_fetch_assoc($qs)); ?>
                        </select>
                    </div>

                    <p class="h4">Informações adicionais</p>
                    <div class="col-5">
                        <label for="twitchuser" class="form-label"><span data-feather="twitch"></span> Username na twitch</label>
                        <input type="text" class="form-control" id="twitchuser" name="twitchuser" placeholder="Seu username na twitch" value="<?php echo $resp['twitchuser'] ?>">

                    </div>
                    <div class="col-5">
                        <label for="twitteruser" class="form-label"><span data-feather="twitter"></span> Username no twitter Twitter</label>
                        <input type="text" class="form-control" id="twitteruser" name="twitteruser" placeholder="informe seu twitter" value="<?php echo $resp['twitteruser'] ?>">
                    </div>
                    <div class="col-2">
                        <label for="birthdate" class="form-label"><span data-feather="calendar"></span> Data de Nascimento</label>
                        <input class="form-control" type="date" name="birthdate" id="birthdate" value="<?php echo $resp['birthdate'] ?>">

                    </div>
                    <hr class="my-4">
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="update" value="update">
                        <button type="submit" class="w-50 btn btn-primary btn-lg">Atualizar Cadastro</button>
                    </div>

                </div>
        </form>

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