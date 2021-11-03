<?php
require_once('../connection/connect.php');

$sqlcat = "SELECT * FROM category ORDER BY category_name ASC";
$qcat = mysqli_query($con, $sqlcat);
$respcat = mysqli_fetch_assoc($qcat);

if (isset($_POST["insert_article"]) && $_POST["insert_article"] === 'insert') {
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $category = $_POST["category"];
    $author = mysqli_real_escape_string($con, $_POST["author"]);
    $abstract = mysqli_real_escape_string($con, $_POST["abstract"]);
    $article = mysqli_real_escape_string($con, $_POST["txtarea"]);

    # todo -> add category, author and images to db
    $sql = "INSERT INTO articles(article_id, article_name, abstract, reg_time, reg_date, article_content, author, category_id) VALUES(0, '$title', '$abstract', CURRENT_TIME(), CURRENT_DATE(), '$article', '$author', '$category')";
    if (mysqli_query($con, $sql)) {
        header('Location:../index.php');
    } else {
        die('Erro ao adicionar o artigo ' . $con . ' e ' . $sql);
    }
} else {
    echo 'opa, tem um erro aí amigão';
}






?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,700;1,300;1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <meta name="description" content="Análise de jogos, filmes e séries das quais Murilo Fischer aka Hellmas já assistiu">
    <title>Hellmas once said - Landing Page</title>

    <!-- Font Aweomse 4 CSS -->
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>
    <!-- Rich Text Editor CSS -->
    <link rel="stylesheet" href="../css/rich-text-editor.css">
</head>

<body>

    <?php
    include('../include/headeradmin.php');
    include('../include/navadmin.php');
    ?>

    <main>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <form action="" method="post" class="col-12 w-100 ">
                        <div class="col-12 form-control ">
                            <p class="h1">Adicionar Artigo</p>
                            <div class="col-12 row row-cols-12 m-0">
                                <div class="col-4">
                                    <label for="title" class="h4">Título do Artigo</label><br>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Insira o nome do Artigo">
                                </div>
                                <div class="col-4">
                                    <label for="category" class="h4">Categoria do artigo</label>
                                    <select name="category" id="category" class="py-1 form-select">
                                        <option value="">Selecione a Categoria</option>
                                        <?php do { ?>
                                            <option value="<?php echo $respcat['category_id'] ?>"><?php echo $respcat['category_name'] ?></option>
                                        <?php } while ($respcat = mysqli_fetch_assoc($qcat)) ?>
                                    </select>
                                </div>
                                <!-- <div class="col-4">
                                </div> -->
                                <div class="col-4">
                                    <label for="author" class="h4">Autor do Artigo</label>
                                    <input type="text" name="author" id='author' class="form-control">
                                    </select>
                                </div>

                            </div>

                            <div class="col-12 py-2 px-3 mt-3 ">
                                <label for="abstract" class="h3">Resumo do Artigo</label>
                                <textarea name="abstract" id="abstract" class="w-100 form-control abstract" placeholder="Insira o Resumo do Artigo" rows="2" cols="12" maxlength="255"></textarea><span id="count" class="counter"></span>
                            </div>

                            <div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="container app py-2 mt-3">
                                <h3>Escreva o Artigo</h3>
                                <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'></div>
                                <textarea name="txtarea" id="txtarea" ng-model="htmlcontent" style="width: 100%" hidden></textarea>
                                <div ng-bind-html="htmlcontent" hidden></div>
                                <div ta-bind="text" ng-model="htmlcontent" ta-readonly='disabled' hidden>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end px-2 my-2">
                                    <input type="hidden" name="insert_article" value="insert">
                                    <button class="btn btn-primary me-md-2 btn-lg" type="submit">Adicionar Artigo</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <div class="container">
            <p class="float-end mb-1">
                <button onclick="gotoTop()" id="t" class="text-primary " style="margin-left: 8px;" title="volta ao topo da página">Voltar ao Topo da página</button>
            </p>
            <p class="mb-1"> &copy; <a href="https://www.linkedin.com/in/mfischer-1997/" target="_blank" class="text-pirmary">Murilo Fischer</a> - Todos os direitos Reservados - <span class="text-primary"> 2021</span> </p>
        </div>
    </footer>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/misc.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- Angular JS -->
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
    <!-- Angular Sanitize JS -->
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
    <!-- Text Angular JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
        angular.module("textAngularTest", ['textAngular']);

        function wysiwygeditor($scope) {
            $scope.orightml = '';
            $scope.htmlcontent = $scope.orightml;
            $scope.disabled = false;

        };
    </script>
    <script>
        feather.replace()
    </script>
    <script>
        var maxchar = 255;
        $('#abstract').after('<span id="count" class="counter"></span>');
        $('#count').html(maxchar + ' of ' + maxchar);
        $('#abstract').attr('maxlength', maxchar);
        $('#abstract').parent().addClass('wrap-text');
        $('#abstract').on("keydown", function(e) {
            var len = $('#abstract').val().length;
            if (len >= maxchar && e.keyCode != 8)
                e.preventDefault();
            else if (len <= maxchar && e.keyCode == 8) {
                if (len <= maxchar && len != 0)
                    $('#count').html(maxchar + ' of ' + (maxchar - len + 1));
                else if (len == 0)
                    $('#count').html(maxchar + ' of ' + (maxchar - len));
            } else
                $('#count').html(maxchar + ' of ' + (maxchar - len - 1));
        })
    </script>
</body>

</html>