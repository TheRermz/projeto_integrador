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
                <h2 class="mb-3">Deletar Conta</h2>
                <form class="needs-validation" novalidate>
                    <p class="h5">Olá Usuário, deseja mesmo <strong>DELETAR</strong> sua conta? Todos seus dados serão apagados do nosso banco de dados, portanto, todos os comentários ou artigo que tenha criado serão apagados </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="" value="" readonly>
                            <div class="invalid-feedback">
                                Favor preencher com seu nome.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="sobrenome" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" placeholder="" value="" readonly>
                            <div class="invalid-feedback">
                                Favor preencher com seu sobrenome
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Username" readonly>
                                <div class="invalid-feedback">
                                    Favor preencher o username que deseja usar.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">
                        <div class="d-flex justify-content-center px-5">
                            <button class="w-25 btn btn-primary btn-lg m-2 " type="submit">Voltar à página principal</button>
                            <button class="w-25 btn btn-danger btn-lg m-2" type="submit">Deletar Conta</button>

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