<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
header('Content-Type: text/html; charset=utf-8');
$receitas = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM receitas WHERE titulo LIKE '%$receitas%' LIMIT 20";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
    echo " <table class=\"table-striped table-hover table-sm transparent\">";
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
        //data-toggle="modal" data-target="#myModal" id="view_data"
        ?>
        <td><a class="btn btn-dark btn-sm" role="button" href="visualizar.php?id=<?php echo $row_user['id'];?>">Visualizar</a></td>
        <?php
        echo "</tbody>";
	}
}else{
	echo "Nenhuma receita encontrada ...";
}