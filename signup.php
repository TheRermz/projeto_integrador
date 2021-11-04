<?php
require_once('connection/connect.php');

#data received via submit btn

if (isset($_POST["insert_user"]) && $_POST["insert_user"] === 'insert') {

    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $surname = mysqli_real_escape_string($con, $_POST["surname"]);
    $usrname = mysqli_real_escape_string($con, $_POST["username"]);
    #   if ($_POST["passwd"] === $_POST["repeatpasswd"]) {
    $md5passwd = md5(mysqli_real_escape_string($con, $_POST["passwd"]));
    # } #else echo 'A senha ' . $_POST["repeatpasswd"] . ' não corresponde a ' . $_POST["passwd"];
    $password = mysqli_real_escape_string($con, $_POST["passwd"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $country = mysqli_real_escape_string($con, $_POST["country"]);
    $state = mysqli_real_escape_string($con, $_POST["state"]);
    $twitchuser = mysqli_real_escape_string($con, $_POST["twitchuser"]);
    $twitteruser = mysqli_real_escape_string($con, $_POST["twitteruser"]);
    $birthdate =  $_POST["birthdate"];


    #INSERT QUERY

    $sql = "INSERT INTO users (user_id, user_name, surname, username, md5_passwd, user_type, email, ban, user_status, reg_day, twitchuser, twitteruser, birthdate, country_id,state_id)
    VALUES (0, '$name', '$surname', '$usrname', '$md5passwd', 'comum', '$email', 0, 1, CURRENT_DATE(), '$twitchuser', '$twitteruser', '$birthdate', $country, $state); "; # INSERT INTO paswd (passwd_id, user_id, passwd) VALUES(0, LAST_INSERT_ID(), '$password'); ";
    #$last_id = $con->insert_id + 1;
    $sqlpasswd = "INSERT INTO paswd (passwd_id, user_id, passwd) VALUES(0, LAST_INSERT_ID(), '$password'); ";
    if (mysqli_query($con, $sql) && mysqli_query($con, $sqlpasswd)) {
        header('Location:index.php');
    } else {
        die("Erro ao cadastrar o Usuário " . $sql . ' alo ');
    }
} else {
    if (isset($_POST["insert_user"]) && $_POST["insert_user"] !== 'insert') {
        echo 'tem erro ai em amigo 👌' . '<br>';
        echo $name = mysqli_real_escape_string($con, $_POST['nome']) . $last_id;
    };
}

# pull all countries from the db
$sqlc = "SELECT * FROM country ORDER BY country_id ASC";
$queryc = mysqli_query($con, $sqlc);
$respc = mysqli_fetch_assoc($queryc);
#echo $respc['country_name_pt'];

# pull all brazilian states from the db
$sqls = 'SELECT * FROM br_states ORDER BY state_id ASC';
$qc = mysqli_query($con, $sqls);
$resps = mysqli_fetch_assoc($qc);
#echo $resps['state_abbr'];

?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/form-validation.css"> to fix --- causing issue with the layout  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <meta name="description" content="Análise de jogos, filmes e séries das quais Murilo Fischer aka Hellmas já assistiu">
    <title>Hellmas once said - Landing Page</title>





</head>

<body class="bg-light">


    <?php
    include('include/header.php')
    ?>


    <div class="container py-5">
        <main>

            <div class="col-md-12">
                <h4 class="mb-3">Cadastro</h4>
                <form class="needs-validation" novalidate method="POST" ">
                    <div class=" row g-3">
                    <div class="col-sm-6">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nome" value="" required>
                        <div class="invalid-feedback">
                            Favor preencher com seu nome.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="surname" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="surname" placeholder="Sobrenome" name='surname' required>
                        <div class="invalid-feedback">
                            Favor preencher com seu sobrenome
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input name="username" type="text" class="form-control" id="username" placeholder="Username" required>
                            <div class="invalid-feedback">
                                Favor preencher o username que deseja usar.
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <label for="passwd" class="form-label">Senha</label>
                        <div class="input-group has-validation">
                            <input type="password" class="form-control" id="passwd" placeholder="Senha" name="passwd" required>
                            <div class="invalid-feedback">
                                Favor insira a sua senha.
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <label for="passwdrepeat" class="form-label">Repita a senha</label>
                        <div class="input-group has-validation">
                            <input name="passwdrepeat" type="password" class="form-control" id="passwdrepeat" placeholder="Indisponível" required readonly>

                            <div class="invalid-feedback">
                                Favor repetir a senha.
                            </div>

                        </div>
                    </div>

                    <div class="col-2">
                        <label>&nbsp;</label>
                        <div class="checkbox">
                            <label class="chbox mt-3">
                                <input type="checkbox" class="btn btn-group" onclick="showPasswd()"><span class="" data-feather="eye-off" id="passwdIcon" onchange="showPasswd()"></span> Mostrar Senha</button>

                            </label>
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="seu@email.com">
                        <div class="invalid-feedback">
                            Informe um email válido.
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label for="country" class="form-label">País</label>
                        <select name="country" class="form-select" id="country" required>

                            <option value="" selected="selected">Selecione seu país...</option>
                            <?php do { ?>
                                <option value="<?php echo $respc['country_id']; ?>"><?php echo $respc['country_name_pt']; ?></option>
                            <?php } while ($respc = mysqli_fetch_assoc($queryc)); ?>

                        </select>
                        <div class="invalid-feedback">
                            Selecione um país válido
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="state" class="form-label">Estado</label>
                        <select name="state" class="form-select" id="state" required>
                            <option value="">Selecione seu estado...</option>
                            <?php do {                            ?>
                                <option value="<?php echo $resps['state_id'] ?>"><?php echo $resps['state_abbr'] ?></option>
                            <?php } while ($resps = mysqli_fetch_assoc($qc)); ?>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione seu estado.
                        </div>
                    </div>

                    <p class="h4">Informações adicionais</p>
                    <div class="col-md-5">
                        <label for="twitchuser" class="form-label"><span data-feather="twitch"></span> Username na twitch</label>
                        <input name="twitchuser" type="text" class="form-control" id="twitchuser" placeholder="Seu username na twitch">
                        <div class="invalid-feedback">
                            Informe seu username da twitch.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <label for="twitteruser" class="form-label"><span data-feather="twitter"></span> Username no twitter Twitter</label>
                        <input name="twitteruser" type="text" class="form-control" id="twitteruser" placeholder="informe seu twitter">
                        <div class="invalid-feedback">
                            Infome seu user do twitter
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="birthdate" class="form-label"><span data-feather="calendar"></span> Data de Nascimento</label>
                        <input class="form-control" type="date" name="birthdate" id="birthdate" required>
                        <div class="invalid-feedback">
                            Informe sua data de nascimento.
                        </div>
                    </div>

            </div>




            <hr class="my-4">
            <div class="d-flex justify-content-center">
                <input type="hidden" name="insert_user" value="insert">
                <button class="w-50 btn btn-primary btn-lg" type="submit">Finalizar Cadastro</button>
            </div>
            </form>
    </div>
    </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1"> &copy; <a href="https://www.linkedin.com/in/mfischer-1997/" target="_blank" class="text-pirmary">Murilo Fischer</a> - Todos os direitos Reservados - <span class="text-primary"> 2021</span> </p>

    </footer>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <script src="js/form-validation.js"></script>

    <script>
        function showPasswd() {
            const passwdType = document.getElementById("passwd");
            const repeatpasswdType = document.getElementById("passwdrepeat");

            //const icon = document.getElementById$("senha");
            if (passwdType.type === "password" && repeatpasswdType.type === "password") {
                passwdType.type = "text";
                repeatpasswdType.type = "text";
                console.log(passwdType);


            } else {
                passwdType.type = "password";
                repeatpasswdType.type = "password";
                console.log(passwdType);

            }
        }
    </script>

</body>

</html>