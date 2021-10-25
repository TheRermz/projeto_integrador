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
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Favor preencher com seu nome.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="sobrenome" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Favor preencher com seu sobrenome
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                                <div class="invalid-feedback">
                                    Favor preencher o username que deseja usar.
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <label for="passwd" class="form-label">Senha</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="passwd" placeholder="Senha" required>
                                <div class="invalid-feedback">
                                    Favor insira a sua senha.
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <label for="passwdrepeat" class="form-label">Repita a senha</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" id="passwdrepeat" placeholder="Senha" required>
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
                            <input type="email" class="form-control" id="email" placeholder="seu@email.com">
                            <div class="invalid-feedback">
                                Informe um email válido.
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label for="country" class="form-label">País</label>
                            <select class="form-select" id="country" required>
                                <option value="select" selected="selected">Selecione um país...</option>

                            </select>
                            <div class="invalid-feedback">
                                Selecione um país válido
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="state" class="form-label">Estado</label>
                            <select class="form-select" id="state" required>
                                <option value="">Selecione seu estado...</option>

                            </select>
                            <div class="invalid-feedback">
                                Por favor, selecione seu estado.
                            </div>
                        </div>

                        <p class="h4">Informações adicionais</p>
                        <div class="col-md-5">
                            <label for="twitchuser" class="form-label"><span data-feather="twitch"></span> Username na twitch</label>
                            <input type="text" class="form-control" id="twitchuser" placeholder="Seu username na twitch">
                            <div class="invalid-feedback">
                                Informe seu username da twitch.
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label for="twitteruser" class="form-label"><span data-feather="twitter"></span> Username no twitter Twitter</label>
                            <input type="text" class="form-control" id="twitteruser" placeholder="informe seu twitter">
                            <div class="invalid-feedback">
                                Infome seu user do twitter
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="birthdate" class="form-label"><span data-feather="calendar"></span> Data de Nascimento</label>
                            <input class="form-control" type="date" name="birthdate" id="birthdate">
                            <div class="invalid-feedback">
                                Informe sua data de nascimento.
                            </div>
                        </div>

                    </div>




                    <hr class="my-4">
                    <div class="d-flex justify-content-center">
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