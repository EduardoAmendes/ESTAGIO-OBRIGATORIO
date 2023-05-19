<?php
session_start();
include_once('../config/conexao.php');

// Pega os dados do usuário
$stmt = $mysqli_connection->prepare("SELECT * FROM tblLOGIN WHERE USUARIO AND SENHA");
$stmt->bind_param('ss', $login, $senha);
$stmt->execute();
$res = $stmt->get_result();

// Verifica se encontrou o usuário
if ($res->num_rows){
    $row = $res->fetch_array(MYSQLI_ASSOC);
    $_SESSION['user'] = $row['usuarioId']; // Marca a global para verificar se o usuário está logado.
    header('Location: http://localhost/sitema/inicio.php'); // Página do sistema
    exit; // Encerra a execução do script
} else {
   // Se não encontrou o usuário, manda de volta para o form de login
   header('Location: http://localhost/sitema/login.php'); // Página do sistema
   exit; // Encerra a execução do script
}

// Se o usuário não está logado, manda para página de login.
if (!isset($_SESSION['user'])) header("Location: http://localhost/index.php");
exit;

if (strcmp(basename($_SERVER['SCRIPT_NAME']), basename(__FILE__)) === 0) {
    header("location: index.php");
}

?>