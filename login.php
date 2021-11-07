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
    $usrq = mysqli_query($con, $sql);
    $usrresp = mysqli_fetch_assoc($usrq);

    #creating a session for the user
    if (isset($usrresp)) {
        $_SESSION["user_id"] = $usrresp['user_id'];
        $_SESSION["user"] = $usrresp['username'];
        $_SESSION["type"] = $usrresp['user_type'];
        $_SESSION["ban"] = $usrresp['ban'];
        #  $_SESSION["passwd"] = $usrresp['md5_passwd'];
        $_SESSION["name"] = $usrresp['user_name'];
        $_SESSION["surname"] = $usrresp['surname'];
        $_SESSION["email"] = $usrresp['email'];
        $_SESSION["country"] = $usrresp['country_id'];
        $_SESSION["state"] = $usrresp['state_id'];
        $_SESSION["twitchuser"] = $usrresp['twitchuser'];
        $_SESSION["twitteruser"] = $usrresp['twitteruser'];
        $_SESSION["birthdate"] = $usrresp['birthdate'];

        if ($_SESSION["type"] === 'comum' || $_SESSION["type"] === 'editor' || $_SESSION["type"] === 'administrador') {

            header('Location:user.php');
        } else {
            $_SESSION["register"] = 'Apenas usuários cadastrados podem acessar a área de usuário'; # . $_SESSION["user"] . ' e ' . $_SESSION["passwd"] . ' e ' .  $_SESSION['type'];
            header('Location:signin.php');
        }
        if ($usrresp["ban"] == 1) {
            $_SESSION['banned'] = 'Este usuário está banido';
            unset($_SESSION["user"], $_SESSION["type"]);
            header('location:signin.php');
        }
    } else {
        $_SESSION["loginerror"] = 'Usuário ou Senha inválidos';
        header('location:signin.php');
    }
} else {
    $_SESSION["emptylogin"] = 'É necessário preencher o usuário e senha';
    header('location:signin.php');
}
