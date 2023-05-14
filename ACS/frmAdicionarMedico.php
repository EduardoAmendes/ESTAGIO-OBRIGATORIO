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
						<form method="POST" name="" action="frmInsertMedico.php" class="">

		      		<div class="form-group">
                        Nome:
		      			<input name="NOME" type="text" class="form-control rounded-left" placeholder="Nome" required>
		      		</div>
                        Função:
                      <div class="form-group">
		      			<input name="FUNCAO" type="text" class="form-control rounded-left" placeholder="Função" required>
		      		</div>
                      UF:
                      <div class="form-group">
		      			<input name="UF" type="text" class="form-control rounded-left" placeholder="UF" required>
		      		</div>
                      CRM:
                      <div class="form-group">
		      			<input name="CRM" type="text" class="form-control rounded-left" placeholder="CRM" required>
		      		</div>
                      CRN:
                      <div class="form-group">
		      			<input name="CRN" type="text" class="form-control rounded-left" placeholder="CRN" required>
		      		</div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
								</div>
	            </div>
	            <div class="form-group">
	            	<button value="CADASTRO" name="cadastro" type="submit" class="btn btn-primary rounded submit p-3 px-5">Cadastrar</button>
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
