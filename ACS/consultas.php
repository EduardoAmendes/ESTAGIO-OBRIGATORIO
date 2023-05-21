<?php
include_once('config/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="../css/style.css">

	<title>Painel Agendamento</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
        <br>
		<a href="agendamentos.php" class="brand">
			<i class='bx bx-plus-medical'></i>
			<span class="text">Sistema de agendamentos</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="agendamentos.php">
					<i class='bx bxs-calendar' ></i>
					<span class="text">Consultas agendadas</span>
				</a>
			</li>
			<li>
				<a href="consultas.php">
					<i class='bx bxs-calendar-edit' ></i>
					<span class="text">Agendar consultas</span>
				</a>
			</li>
			<li>
				<a href="medicos.php">
					<i class='bx bx-plus-medical' ></i>
					<span class="text">Equipe de médicos </span>
				</a>
			</li>
		</ul>
        
		<ul class="side-menu">
			<!--- talvez mais para frente adicionar config.
            <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Configurações</span>
				</a>
			</li>
            -->
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sair</span>
				</a>
			</li>
		</ul>
        
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Pesquisar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Consultas</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Painel Administrativo</a>
						</li>
					</ul>
				</div>
				<!---BAIXAR PDF 
                    <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Baixar PDF</span>
				</a>
                --->
			</div>
		

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Gestão de fluxo</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>


					<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
						<form method="POST" name="" action="insert/inserirAgenda.php" class="">

		      		<div class="form-group">
                        Nome:
                        <?php 
                            $SQL = "SELECT NOME_MEDICO FROM tblMEDICO ORDER BY NOME_MEDICO";
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

                        <!-- -->
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

        allSideMenu.forEach(item=> {
            const li = item.parentElement;
        
            item.addEventListener('click', function () {
                allSideMenu.forEach(i=> {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });
        
        
        
        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');
        
        menuBar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
        })
        
        
        
        
        
        
        
        const searchButton = document.querySelector('#content nav form .form-input button');
        const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
        const searchForm = document.querySelector('#content nav form');
        
        searchButton.addEventListener('click', function (e) {
            if(window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle('show');
                if(searchForm.classList.contains('show')) {
                    searchButtonIcon.classList.replace('bx-search', 'bx-x');
                } else {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                }
            }
        })
        
        
        
        
        
        if(window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if(window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
        
        
        window.addEventListener('resize', function () {
            if(this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })
        
        
        
        const switchMode = document.getElementById('switch-mode');
        
        switchMode.addEventListener('change', function () {
            if(this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })</script>
</body>
</html>