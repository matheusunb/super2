<?php
session_start();
include("conexao.php");

$busca = "SELECT * FROM contatos";
$total_reg = "10";

$pagina=$_GET['pagina'];
if (!$pagina) {
    $pc = "1";
} else {
    $pc = $pagina;
}

$inicio = $pc - 1;
$inicio = $inicio * $total_reg;

$limite = mysqli_query($con, $busca . "LIMIT" . $inicio . "," . $total_reg);
$todos = mysqli_query($con, $busca);

$tr = mysqli_num_rows($todos); // verifica o número total de registros
$tp = $tr / $total_reg; // verifica o número total de páginas

// vamos criar a visualização
while ($dados = mysqli_fetch_array($limite)) {
$nome = $dados["nome"];
echo "Nome: $nome<br>";
}

// agora vamos criar os botões "Anterior e próximo"
$anterior = $pc -1;
$proximo = $pc +1;
if ($pc>1) {
echo " <a href='?pagina=$anterior'><- Anterior</a> ";
}
echo "|";
if ($pc<$tp) {
echo " <a href='?pagina=$proximo'>Próxima -></a>";
}

$conexao->close();

exit;
?>