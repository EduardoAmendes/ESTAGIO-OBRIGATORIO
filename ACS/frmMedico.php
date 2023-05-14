<?php
include_once('../config/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administração</title>
        <!-- Favicon-->
        <link rel="icon" type="../image/x-icon" href="../assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/backend.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">ACS</div>
                <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../backend.php">Inicio</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="frmAdicionarMedico.php">Adicionar Médico</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="frmMedico.php">Médico</a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Esconder Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="../backend.php">Home</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->

                <!--<div class="container px-4 text-center bg-primary bg-gradient text-white">-->
                <div class="container-fluid">
                <span id="queryMedico"></span>
                <table class="container bg-gradient bg-primary px-4 " border = 1>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>FUNÇÃO</th>
                    <th>CRM</th>
                    <th>CRN</th>
                    <th>UF</th>
                </tr>

                    <?php
                    //consultar no banco de dados
                    $verifica = mysqli_query($mysqli_connection, 
                    "SELECT * FROM tblMEDICO") ;

                    //Verificar se encontrou resultado na tabela "usuarios"
                    if(($verifica ) AND ($verifica->num_rows != 0)){
                        while($row_usuario = mysqli_fetch_assoc($verifica)){
                            echo '<tr>';
                            echo '<td>'. $row_usuario['ID'] .'</td>';
                            echo '<td>'. $row_usuario['NOME_MEDICO'] .'</td>';
                            echo '<td>'. $row_usuario['FUNCAO_MEDICO'] .'</td>';
                            echo '<td>'. $row_usuario['CRM_MEDICO'] .'</td>';
                            echo '<td>'. $row_usuario['CRN_MEDICO'] .'</td>';
                            echo '<td>'. $row_usuario['CRM_MEDICO_UF'] .'</td>';
                            echo '</tr>';
                        }
                    }else{
                        echo "Nenhum usuário encontrado";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/backend.js"></script>
    </body>
</html>
