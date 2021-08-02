<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';

$titulo = $_POST['titulo'];
$ingredientes = $_POST['ingredientes'];
$fazer = $_POST['fazer'];
$autor = $_POST['autor'];

$cadastrar = $conn->query("INSERT INTO receitas (titulo, ingredientes, fazer, autor) VALUES ('$titulo','$ingredientes','$fazer','$autor')");


if ($cadastrar) {
    $_SESSION['sucesso'] = "RECEITA INSERIDA COM SUCESSO!";
} else {
    $_SESSION['erro'] = "ERRO AO INSERIR RECEITA!";
}

header("Location: index.php");