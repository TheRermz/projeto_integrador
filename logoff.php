<?php
if (!isset($_SESSION)) {
    session_start();
}

unset($_SESSION["user"], $_SESSION["type"]);
$_SESSION["logoff"] = 'Logoff realizado com sucesso!';
header('Location:signin.php');
