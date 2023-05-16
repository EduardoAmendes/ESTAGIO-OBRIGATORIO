<?php
session_start();
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
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="frmAgendaMedico.php">Agenda Médico</a>
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
                <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
						<form method="POST" name="" action="frmInsertAgenda.php" class="">

		      		<div class="form-group">
                        Nome:
                        <?php 
                            $SQL = "SELECT NOME_MEDICO FROM tblMEDICO";
                            $QUERY  = mysqli_query($mysqli_connection, $SQL);
                        
                        ?>
                        <select name="NOME" class="form-control rounded-left" placeholder="NOME" required>

                        <?php

                            while($RESULTADO = mysqli_fetch_array($QUERY)){ 
                                
                        ?>
                        

                        <option value="
                        <?=  $RESULTADO['NOME_MEDICO'] ?>">
                        
                        <?php echo $RESULTADO['NOME_MEDICO']; ?>
                    </option>
                  <?php } ?>
                        </option>

                        </select>
		      		</div>
                      Data:
                      <div class="form-group">
		      			<input name="DATA" type="date" class="form-control rounded-left" required>
		      		</div>
                      Hora:
                      <div class="form-group">
		      			<input name="HORA" type="time" class="form-control rounded-left" placeholder="HORA" required>
		      		</div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
								</div>
	            </div>
	            <div class="form-group">
	            	<button value="InserirAgenda" name="InserirAgenda" type="submit" class="btn btn-primary rounded submit p-3 px-5">AGENDAR</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/backend.js"></script>
    </body>
</html>
