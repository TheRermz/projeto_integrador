<?php
$activepage = basename($_SERVER["PHP_SELF"], ".php")
?>

<nav class=" bg-dark navbar-dark">
    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link <?php if ($activepage === 'index') echo 'active bg-secondary', '' ?>  text-white" aria-current="page" href="../projeto_integrador/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activepage === 'about') echo 'active bg-secondary', '' ?> text-white" aria-current="page" href="../projeto_integrador/about.php">Sobre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activepage === 'recommendations') echo 'active bg-secondary', '' ?> text-white" aria-current="page" href="../projeto_integrador/recommendations.php">Recomendações</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($activepage === 'user') echo 'active bg-secondary', '' ?> text-white" aria-current="page" href="../projeto_integrador/user.php">Página do Usuário</a>
        </li>
        <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li> -->
        <!-- <form class="d-flex mb-1 search">
            <input class="form-control me-2 ms-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary " type="submit">Search</button>
        </form> -->
    </ul>
</nav>