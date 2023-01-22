<?php
session_start();
include("conexao.php");

$mci = mysqli_real_escape_string($conexao, $_POST['mci']);
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));

$sql = "INSERT INTO contatos (mci, nome, email, telefone, data_cadastro) VALUES ('$mci', '$nome', '$email', '$telefone', NOW())";

if($conexao->query($sql) == TRUE) {
    echo '1';
}else{
    echo '0';
}

$conexao->close();

header('Location: inclusao.php');
exit;
?>