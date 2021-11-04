<?php
require_once('connection/connect.php');



if (isset($_POST['delete']) && $_POST['delete'] === 'deleteacc') {
    $userid = $_POST["userid"];
    $sql = "DELETE FROM users WHERE user_id = $userid";
    if (mysqli_query($con, $sql)) {

        header('Location:index.php');
    } else {
        die("Erro  ao deletar usuario $userid: " . $sql . "<br>" . mysqli_error($con));
    }
}

if (isset($_POST["delete"]) && $_POST["delete"] === 'gotoindex') {
    header('Location:index.php');
}

if (isset($_GET["user_id"]) && $_GET["user_id"] !== '') {
    $user_id = $_GET["user_id"];
    $sqlu = "SELECT user_id, user_name, surname, username FROM users WHERE user_id = $user_id";
    $qu = mysqli_query($con, $sqlu);
    $resp = mysqli_fetch_assoc($qu);
}


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
    <title>Hellmas once said - Deletar Conta</title>





</head>

<body class="bg-light">


    <?php
    include('include/header.php')
    ?>


    <div class="container py-5">
        <main>

            <div class="col-md-12">
                <h2 class="mb-3">Deletar Conta</h2>
                <form action="" method="POST" class="needs-validation" novalidate>
                    <p class="h5">Olá <?php echo $resp['username'] ?>, deseja mesmo <strong>DELETAR</strong> sua conta? Todos seus dados serão apagados do nosso banco de dados, portanto, todos os comentários ou artigo que tenha criado serão apagados </p>
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
                                <input type="text" class="form-control" id="username" value="<?php echo $resp['username'] ?>" placeholder="Username" readonly>

                            </div>
                        </div>

                        <hr class="my-4">
                        <div class="d-flex justify-content-center px-5">
                            <input type="hidden" name="userid" value="<?php echo $resp['user_id'] ?>">
                            <button class="w-25 btn btn-primary btn-lg m-2 " type="submit" value="gotoindex" name="delete">Voltar à página principal</button>
                            <button class="w-25 btn btn-danger btn-lg m-2" type="submit" value="deleteacc" name="delete">Deletar Conta</button>

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