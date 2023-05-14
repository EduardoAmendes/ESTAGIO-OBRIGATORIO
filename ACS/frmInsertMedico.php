<?php
include_once("../config/conexao.php");
                    
    $NOME_MEDICO = $_POST["NOME"];
    $FUNCAO_MEDICO = $_POST["FUNCAO"];
    $CRM_MEDICO_UF = $_POST["UF"];
    $CRM_MEDICO = $_POST["CRM"];
    $CRN_MEDICO = $_POST["CRN"];
    $CADASTRO = $_POST["CADASTRO"];
                

if (isset($CADASTRO)){

                        $SQL = mysqli_query($mysqli_connection, 
                        "SELECT * FROM tblMEDICO WHERE CRM_MEDICO = '$CRM_MEDICO' OR CRN_MEDICO = '$CRN_MEDICO'");

                        if (mysqli_num_rows($SQL) <=0 ){
                            echo "<script language='javascript' type='text/javascript'>
                            alert('MEDICO JÁ CADASTRADO');</script>";
                        } else {
                            mysqli_query($insertMedico, $mysqli_connection);
                            $insertMedico = "INSERT INTO tblMEDICO(ID, NOME_MEDICO, 
                            FUNCAO_MEDICO, CRM_MEDICO_UF, CRM_MEDICO, CRN_MEDICO) VALUES(
                            NULL, '$NOME_MEDICO', '$FUNCAO_MEDICO', '$CRM_MEDICO_UF', '$CRM_MEDICO', '$CRN_MEDICO'
                            )";

                            echo "<script language='javascript' type='text/javascript'>
                            alert('MEDICO CADASTRADO');</script>";                            
                        }
                    }

