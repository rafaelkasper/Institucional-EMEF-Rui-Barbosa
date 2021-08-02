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

    <script> $(".alert").alert()</script>

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
<br>
    <h5>LIVRO DE RECEITAS</h5>
<?php

//Incluir a conexão com banco de dados
include_once 'conexao.php';
header('Content-Type: text/html; charset=utf-8');

//Pesquisar no banco de dados nome do usuario referente a palavra digitada

$result_user = "SELECT * FROM receitas";

$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    echo " <table class=\"table-striped table-hover table-sm\">";
    echo "<thead>";
        echo "<th>"."ID"."</th>";
        echo "<th>"."NOME"."</th>";
        echo "<th>"."AUTOR"."</th>";
        echo "<th>".""."</th>";
       echo "</thead>";
    while($row_user = mysqli_fetch_assoc($resultado_user)){

       echo "<tbody>";
        echo "<td>".$row_user['id']."</td>";
        echo "<td>".$row_user['titulo']."</td>";
        echo "<td>".$row_user['autor']."</td>";
        
        ?>
        <td><a class="btn btn-dark btn-sm" role="button" href="visualizar.php?id=<?php echo $row_user['id'];?>">Visualizar</a></td>
        <?php
        echo "</tbody>";
    }

}else{

    echo "Nenhuma receita encontrada ...";

}
echo "</table>";
?>
<br>
<p> <a href="index.php" class="btn btn-dark btn-sm" role="button">Voltar</a></p>
<br>
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

</body>

</html>
