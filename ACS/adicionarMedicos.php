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

	<title>Painel Agendamento</title>
</head>
<body>



		<!-- SIDEBAR -->
		<section id="sidebar">
        <br>
		<a href="consultas.php" class="brand">
			<i class='bx bx-plus-medical'></i>
			<span class="text">Sistema de agendamentos</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="consultas.php">
					<i class='bx bxs-calendar' ></i>
					<span class="text">Consultas agendadas</span>
				</a>
			</li>
			<li>
				<a href="adicionarConsultas.php" id="agendar-consultas">
					<i class='bx bxs-calendar-edit' ></i>
					<span class="text">Agendar consultas</span>
				</a>
			</li>
			<li>
				<a href="medicos.php" id="equipe-medicos">
					<i class='bx bx-plus-medical' ></i>
					<span class="text">Equipe de médicos </span>
				</a>
                <ul>
                    <li>
                        <a href="adicionarMedicos.php" id="submenu-medicos" style="display: none;">
                            <i class="bx bx-plus-medical">
                                <span class="text">Adicionar médico</span>
                            </i>
                        </a>
                    </li>
                </ul>
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
					<h1>Adcionar médicos</h1>
				</div>
				<!---BAIXAR PDF 
                    <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Baixar PDF</span>
				</a>
                --->
			</div>
            <div class="wrapper">
                <h2>Adicionar Médico</h2>
                <form method="POST" action="insert/inserirMedico.php">
                    <div class="input-box">
                        <input name="NOME" type="text" placeholder="Nome do médico" required>
                    </div>
                    <div class="input-box">
                        <input name="FUNCAO" type="text" placeholder="Funcao" required>
                    </div>
                    <div class="input-box">
                        <input name="UF" type="text" placeholder="UF" required>
                    </div>
                    
                    <div class="input-box">
                        <input name="CRN" type="text" placeholder="CRN">
                    </div><div class="input-box">
                    <div class="input-box">
                        <input name="CRM" type="text" placeholder="CRM">
                    </div><div class="input-box">
                    <div class="input-box button">
                        <input name="cadastro" type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins';
    }
    .wrapper{
      display: flex;
      flex-direction: column;
      height: 500px;
      position: relative;
      max-width: 480px;
      width: 100%;
      background: #fff;
      padding: 34px;
      border-radius: 6px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }
    .wrapper h2{
      position: relative;
      font-size: 22px;
      font-weight: 600;
      color: #333;
    }
    .wrapper h2::before{
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 28px;
      border-radius: 12px;
      background: #4070f4;
    }
    .wrapper form {
        margin-top: 30px;
    }
    
    .wrapper form .input-box{
        height: 52px;
        margin: 18px 0;
    }
    
    form .input-box input{
      height: 100%;
      width: 100%;
      outline: none;
      padding: 0 15px;
      font-size: 17px;
      font-weight: 400;
      color: #333;
      border: 1.5px solid #C7BEBE;
      border-bottom-width: 2.5px;
      border-radius: 6px;
      transition: all 0.3s ease;
    }
    
    .input-box input:focus,
    .input-box input:valid{
        border-color: #4070f4;
    }
    
    form h3 {
        color: #707070;
        font-size: 14px;
        font-weight: 500;
        margin-left: 10px;
    }
    
    .input-box.button input {
        color: #fff;
        letter-spacing: 1px;
    }
    
    .input-box.input-box.button input {
        color: #fff;
        letter-spacing: 1px;
        border: none;
        background: #4070f4;
        cursor: pointer;
    }
    
    .input-box.button input:hover {
        background: #0e4bf1;
    }
    
    form .text h3 {
        color: #333;
        width: 100%;
        text-align: center;
    }
    form .text h3 a{
        text-decoration: none;
    }
    
    form .text h3 a:hover{
        text-decoration: underline;
    }
    
    </style>

	<script>
    document.getElementById('equipe-medicos').addEventListener('click', function() {
        var submenu = document.getElementById('submenu-medicos');
        if(submenu.style.display === 'none' ) {
            submenu.style.display = 'block';
        } else {
            submenu.style.display = 'none';
        }

    });
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