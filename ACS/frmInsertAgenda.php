<?php
include_once("../config/conexao.php");
                    
    $DATA = $_POST["DATA"];
    $HORA = $_POST["HORA"];
    $FK_ID_MEDICO = $_POST["FK_ID"];


if (isset($_POST['inserirAgenda'])){
    $insertMedico = "INSERT INTO tblAGENDA(ID_AGENDAMENTO, DATA_AGENDAMENTO, HORA_AGENDAMENTO, FK_ID) VALUES(
        NULL, '$DATA', '$HORA', (SELECT ID FROM tblMEDICO WHERE id = '$FK_ID_MEDICO')
    )";
    mysqli_query($mysqli_connection, $insertMedico);
    echo"<script language='javascript' type='text/javascript'> alert('MEDICO AGENDADO');</script>";
    header('location:frmAgendaMedico.php') ;                        
 }
                    

