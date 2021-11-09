<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['type'] == 'comum') {
    $_SESSION['notautheditor'] = "Apenas usuários editores e administradores têm acesso à essa seção do site!";
    header('Location:../user.php');
}

#adicionando redundância ao código
if (!$_SESSION['user']) {
    $_SESSION['notlogged'] = "Apenas usuários cadastrados podem acessar o site!";
    header('Location:../signin.php');
}
