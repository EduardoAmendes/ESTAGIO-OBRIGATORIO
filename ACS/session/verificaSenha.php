<?php
session_start();
include_once('../config/conexao.php');

$login = $_POST["login"];
$senha = $_POST["senha"];
$entrar = $_POST["entrar"];

if (isset($entrar)) {

    $verifica = mysqli_query($mysqli_connection, 
    "SELECT * FROM tblLOGIN WHERE USUARIO = '$login'
     AND SENHA = '$senha'") or die("erro ao selecionar");

    if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.html';</script>";
        die();
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Login correto');</script>";
        setcookie("login",$login);
        header("Location:../agendamentos.php");
      }
    }

?>