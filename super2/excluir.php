<?php
session_start();
include("conexao.php");

$usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);

$sql = "DELETE FROM contatos WHERE usuario_id = '$usuario_id'";

if($conexao->query($sql) == TRUE) {
	echo '1';
}else{
	echo '0';
}

$conexao->close();

exit;
?>