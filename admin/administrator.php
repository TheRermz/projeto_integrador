<?php 
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['type'] != 'administrador') {
    $_SESSION['notauth'] = "Apenas usuários administradores têm acesso à essa seção do site!";
    header('Location:../signin.php');
}

#adicionando redundância ao código
if (!$_SESSION['user']) {
    $_SESSION['notlogged'] = "Apenas usuários cadastrados podem acessar o site!";
    header('Location:../signin.php');
}
