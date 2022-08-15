<?php

$lote = $_POST['lote'];
$tipo = $_POST['tipo'];
$aplicador = $_POST['aplicador'];
$data = $_POST['date'];

echo "lote: ".$lote."<br>"."tipo: ".$tipo."<br>"."aplicador: ".$aplicador."<br>".$data;

$host = "localhost";
$database = "projeto";
$username = "root";
$password = "";

$conexao = mysqli_connect($host,$username,$password,$database);

if(!$conexao){
    die("Conexão falha");
    echo "entrou aqui";
}

$sql = "INSERT INTO cadastrovacinas VALUES ('$lote', '$tipo', '$aplicador','$data')";

if(mysqli_query($conexao,$sql)){
    echo "Inserido !";
}
mysqli_close($conexao);
header('Location:endPage.html');
?>  