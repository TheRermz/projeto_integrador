<?php
require_once('connection/connect.php');

# if there is no session active --> will start a session
if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST["username"]) && $_POST["username"] != '' && isset($_POST["passwd"]) && $_POST["passwd"]) {
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $passwd = md5(mysqli_real_escape_string($con, $_POST["passwd"]));

    $sql = "SELECT * FROM users where username = '$username' AND md5_passwd = '$passwd'";
    $usrq = mysqli_query($con, $sql);;
    $usrresp = mysqli_fetch_assoc($usrq);

    #creating a session for the user
    if (isset($usrresp)) {
        $_SESSION["user_id"] = $usrresp['user_id'];
        $_SESSION["user"] = $usrresp['username'];
        $_SESSION["type"] = $usrresp['type'];
        $_SESSION["ban"] = $usrresp['ban'];

        if ($_SESSION["type"] === 'administrador' || $_SESSION["tipo"] === 'editor' || $_SESSION["comum"]) {
            header('Location:user.php');
        } else {
            $_SESSION["register"] = 'Apenas usuários cadastrados podem acessar a área de usuário';
            header('Location:signin.php');
        }
        #  if ($usrresp["ban"] === 1) {
        #      $_SESSION['*banned'] = 'Este usuário está banido';
        #     header('location:signin.php');
        # }
    }

    $_SESSION["loginerror"] = 'Usuário ou Senha inválidos';
    header('location:signin.php');
} else {
    $_SESSION["emptylogin"] = 'É necessário preencher o usuário e senha';
    header('location:signin.php');
}
