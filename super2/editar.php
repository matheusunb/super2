<?php
session_start();
include("conexao.php");

$id = mysqli_real_escape_string($conexao, $_POST['id']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$observacao = mysqli_real_escape_string($conexao, $_POST['observacao']);

$sql = "INSERT INTO contatos_historico (mci, nome, email, telefone, data_cadastro, id)
SELECT mci, nome, email, telefone, data_cadastro, usuario_id FROM contatos WHERE usuario_id = '$id'";

if($conexao->query($sql) == TRUE) {
    echo '1';
}else{
    echo '0';
}

$sql = "UPDATE contatos SET nome = '$nome', observacao = '$observacao', data_cadastro = NOW() WHERE usuario_id = '$id'";

if($conexao->query($sql) == TRUE) {
    echo '1';
}else{
    echo '0';
}

$conexao->close();

header('Location: edicao.php?m=1&id=' . $id);
exit;
?>