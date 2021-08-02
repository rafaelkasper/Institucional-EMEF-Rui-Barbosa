<html lang="pt-br">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>EMEF RUI BARBOSA</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="img/favicon.ico"/>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        body {
            background: #9152f8;
            background: -webkit-linear-gradient(top, #7579ff, #b224ef);
            background: -o-linear-gradient(top, #7579ff, #b224ef);
            background: -moz-linear-gradient(top, #7579ff, #b224ef);
            background: linear-gradient(top, #7579ff, #b224ef);
        }
    </style>

    <!-- Custom styles for this template -->

    <link href="estilo.css" rel="stylesheet">

</head>
<body class="text-center">
<div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
        <div class="inner">
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">EMEF RUI BARBOSA</a>
                <a class="nav-link" href="https://emefruibarbosa.xyz">HOME</a>
                <a class="nav-link" href="https://www.facebook.com/ruibarbosacb/">FACEBOOK</a>
                <a class="nav-link" href="http://emefruibarbosacb.blogspot.com/">BLOG</a>
                <a class="nav-link" href="https://www.emefruibarbosa.xyz/aplicativo/">APLICATIVO</a>
                <a class="nav-link" href="https://www.emefruibarbosa.xyz/atividades/">ATIVIDADES</a>
            </nav>
        </div>
    </header>
<div>
    <br>
    <h5>LIVRO DE RECEITAS</h5>
    <br>

    <form method="post" action="salvar.php">
        <div class="form-group">
            <label for="titulo">NOME DA RECEITA</label>
            <input type="text" class="form-control" id="titulo" name="titulo"  placeholder="Digite um nome para sua receita:">
        </div>
        <div class="form-group">
            <label for="ingredientes">INGREDIENTES</label>
            <textarea type="text" class="form-control" id="ingredientes" name="ingredientes" placeholder="Digite os ingredientes da sua receita:"></textarea>
        </div>
        <div class="form-group">
            <label for="fazer">MODO DE FAZER</label>
            <textarea type="text" class="form-control" id="fazer" name="fazer" placeholder="Escreva o passo-a-passo de como fazer sua receita:"></textarea>
        <p><label for="review"></label> <small class="caracteres"><b></b></small></p>
        </div>
        <div class="form-group">
            <label for="autor">NOME DO AUTOR DA RECEITA</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite seu nome:">
        </div>
        <button type="submit" class="btn btn-dark">Salvar receita</button>
    </form>
<p> <a href="index.php" class="btn btn-dark btn-sm" role="button">Voltar</a></p>

    </div>



    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>Rua Vicente Celestino 275, Bairro Metzler - Campo Bom - RS &nbsp &nbspTelefone: 51 3598-6109
                &nbsp &nbsp Email: ruibarbosa@campobom.rs.gov.br</p>
            <p>&copy; Site elaborado por Rafael Kasper</p>
        </div>
    </footer>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script type="text/javascript" src="personalizado.js"></script>
<script>
$(document).on("input", "#fazer", function() {
        var limite = 2000;
        var informativo = "caracteres restantes.";
        var caracteresDigitados = $(this).val().length;
        var caracteresRestantes = limite - caracteresDigitados;

        if (caracteresRestantes <= 0) {
            var comentario = $("textarea[name=fazer]").val();
            $("textarea[name=fazer]").val(fazer.substr(0, limite));
            $(".caracteres").text("0 " + informativo);
        } else {
            $(".caracteres").text(caracteresRestantes + " " + informativo);
        }
    });
    </script>

</body>

</html>