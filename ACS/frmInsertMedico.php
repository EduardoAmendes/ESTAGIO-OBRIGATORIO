<?php
include_once("../config/conexao.php");
                    
    $NOME_MEDICO = $_POST["NOME"];
    $FUNCAO_MEDICO = $_POST["FUNCAO"];
    $CRM_MEDICO_UF = $_POST["UF"];
    $CRM_MEDICO = $_POST["CRM"];
    $CRN_MEDICO = $_POST["CRN"];
                

if (isset($_POST['cadastro'])){
    $insertMedico = "INSERT INTO tblMEDICO(ID, NOME_MEDICO,
    FUNCAO_MEDICO, CRM_MEDICO_UF, CRM_MEDICO, CRN_MEDICO) VALUES(NULL, '$NOME_MEDICO', '$FUNCAO_MEDICO', '$CRM_MEDICO_UF', '$CRM_MEDICO', '$CRN_MEDICO')";
    mysqli_query($mysqli_connection, $insertMedico);
    echo"<script language='javascript' type='text/javascript'> alert('MEDICO CADASTRADO');</script>";
    header('location:frmMedico.php') ;                        
 }
                    

