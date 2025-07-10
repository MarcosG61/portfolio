<?php
$conexao = mysqli_connect("localhost", "root", "", "sistema");
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>