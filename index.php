<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Sales</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Car Sales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionário
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-funcionario">Lista</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-cliente">Lista</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marca
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-marca">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-marca">Lista</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelo
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-modelo">Lista</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Venda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar-venda">Cadastrar</a></li>
            <li><a class="dropdown-item" href="?page=listar-venda">Lista</a></li>
          </ul>
        </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

	<div class="container mt-3 flex-grow-1">
		<div class="row">
			<div class="col">
				<?php
				   // conexão com o banco de dados
				  include('config.php');

					switch (@$_REQUEST['page']) {
						// funcionario
						case 'cadastrar-funcionario':
							include("cadastrar-funcionario.php");
							break;
						case 'listar-funcionario':
							include("listar-funcionario.php");
							break;
						case 'editar-funcionario':
							include("editar-funcionario.php");
							break;
						case 'salvar-funcionario':
							include("salvar-funcionario.php");
							break;

						// cliente
						case 'cadastrar-cliente':
							include("cadastrar-cliente.php");
							break;
						case 'listar-cliente':
							include("listar-cliente.php");
							break;
						case 'editar-cliente':
							include("editar-cliente.php");
							break;
						case 'salvar-cliente':
							include("salvar-cliente.php");
							break;

						// marca
						case 'cadastrar-marca':
							include("cadastrar-marca.php");
							break;
						case 'listar-marca':
							include("listar-marca.php");
							break;

						case 'editar-marca':
							include("editar-marca.php");
							break;
						case 'salvar-marca':
							include("salvar-marca.php");
							break;

						// modelo
						case 'cadastrar-modelo':
							include("cadastrar-modelo.php");
							break;
						case 'listar-modelo':
							include("listar-modelo.php");
							break;
						case 'editar-modelo':
							include("editar-modelo.php");
							break;
						case 'salvar-modelo':
							include("salvar-modelo.php");
							break;

						// venda
						case 'cadastrar-venda':
							include("cadastrar-venda.php");
							break;
						case 'listar-venda':
							include("listar-venda.php");
							break;
						case 'editar-venda':
							include("editar-venda.php");
							break;
						case 'salvar-venda':
							include("salvar-venda.php");
							break;																					
default:
						print "
                            <div class='text-center mb-5'>
                                <h1><i class='fas fa-car me-2'></i>Seja bem-vindo(a) ao sistema da Car Sales!</h1>
                                <p class='lead'>Acesse rapidamente os módulos do sistema:</p>
                            </div>

                            <div class='row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4'>

                                <div class='col'>
                                    <div class='card text-center h-100 shadow-sm'>
                                        <div class='card-body d-flex flex-column justify-content-center'>
                                            <i class='fas fa-user-tie fa-4x text-primary mb-3'></i>
                                            <h5 class='card-title'>Funcionários</h5>
                                            <p class='card-text'>Gerencie o cadastro e informações da equipe.</p>
                                            <a href='?page=listar-funcionario' class='btn btn-primary mt-auto'><i class='fas fa-list'></i> Listar Funcionários</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col'>
                                    <div class='card text-center h-100 shadow-sm'>
                                        <div class='card-body d-flex flex-column justify-content-center'>
                                            <i class='fas fa-users fa-4x text-success mb-3'></i>
                                            <h5 class='card-title'>Clientes</h5>
                                            <p class='card-text'>Acompanhe e gerencie o histórico de clientes.</p>
                                            <a href='?page=listar-cliente' class='btn btn-success mt-auto'><i class='fas fa-list'></i> Listar Clientes</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col'>
                                    <div class='card text-center h-100 shadow-sm'>
                                        <div class='card-body d-flex flex-column justify-content-center'>
                                            <i class='fas fa-handshake fa-4x text-warning mb-3'></i>
                                            <h5 class='card-title'>Vendas</h5>
                                            <p class='card-text'>Cadastre novas vendas e visualize o histórico.</p>
                                            <a href='?page=listar-venda' class='btn btn-warning text-dark mt-auto'><i class='fas fa-list'></i> Listar Vendas</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class='col'>
                                    <div class='card text-center h-100 shadow-sm'>
                                        <div class='card-body d-flex flex-column justify-content-center'>
                                            <i class='fas fa-tags fa-4x text-info mb-3'></i>
                                            <h5 class='card-title'>Marcas</h5>
                                            <p class='card-text'>Administre as marcas de veículos disponíveis.</p>
                                            <a href='?page=listar-marca' class='btn btn-info text-dark mt-auto'><i class='fas fa-list'></i> Listar Marcas</a>
                                        </div>
                                    </div>
                                </div>

                                <div class='col'>
                                    <div class='card text-center h-100 shadow-sm'>
                                        <div class='card-body d-flex flex-column justify-content-center'>
                                            <i class='fas fa-car-side fa-4x text-danger mb-3'></i>
                                            <h5 class='card-title'>Modelos</h5>
                                            <p class='card-text'>Gerencie os modelos e versões dos carros.</p>
                                            <a href='?page=listar-modelo' class='btn btn-danger mt-auto'><i class='fas fa-list'></i> Listar Modelos</a>
                                        </div>
                                    </div>
                                </div>
                                
                              

                            </div>
                        ";
		
					}
				?>

			</div>
		</div>
	</div>
<footer class="bg-dark text-light pt-5 pb-4">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3 text-warning">Car Sales</h5>
                <p>
                    Car Sales: Seu próximo carro começa aqui.
                </p>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Navegação</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-light text-decoration-none">Sobre Nós</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Ver Estoque</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Fale Conosco</a></li>
                    <li><a href="#" class="text-light text-decoration-none">Blog / Novidades</a></li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase fw-bold mb-3">Contato & Social</h5>
                <p>
                    <i class="fas fa-map-marker-alt me-2 text-warning"></i> Cidade do Automóvel, Brasília - DF
                </p>
                <p>
                    <i class="fas fa-envelope me-2 text-warning"></i> concessionariacarsales@carsales.com
                </p>
                <div class="d-flex mt-3">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in fa-lg"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center py-3 border-top border-secondary">
        <p class="mb-0">&copy; 2025 Car Sales. Todos os direitos reservados. | <a href="#" class="text-light text-decoration-none">Política de Privacidade</a></p>
    </div>
</footer>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>