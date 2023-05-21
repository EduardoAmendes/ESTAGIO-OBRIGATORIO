<?php

include_once('../config/conexao.php');
             
    $NOME = $_POST["NOME"];
    $DATA = $_POST["DATA"];
    $HORA = $_POST["HORA"];
    //$FK_ID_MEDICO = $_POST["FK_ID"];


if (isset($_POST['InserirAgenda'])){

    $insertMedico = "INSERT INTO tblAGENDA(ID_AGENDAMENTO, NOME_MEDICO, DATA_AGENDAMENTO, HORA_AGENDAMENTO) VALUES(
        NULL, '$NOME','$DATA', '$HORA'
    )";
    mysqli_query($mysqli_connection, $insertMedico);
    echo"<script language='javascript' type='text/javascript'> alert('MEDICO AGENDADO') </script>";
    header('location:../agendamentos.php') ;               
 } else {
    echo"<script language='javascript' type='text/javascript'> alert('MEDICO NÃO AGENDADO') </script>";
    header('location:../agendamentos.php') ;    
 }
                    

