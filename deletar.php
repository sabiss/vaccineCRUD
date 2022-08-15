<?php
$lote = $_POST['lote'];

$host = "localhost";
$username = "root";
$password = "";
$database = "projeto";

$conexao = mysqli_connect($host,$username,$password,$database);

if(!$conexao){
    die("Cinexão Falhou");
}

$comandoSQL = "DELETE FROM cadastrovacinas WHERE lote = '$lote'";

if(mysqli_query($conexao, $comandoSQL)){
    mysqli_close($conexao);
}

header('Location:endPage.html');

?>