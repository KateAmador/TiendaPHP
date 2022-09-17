<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Bootstrap 5 Login Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<!--<img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="100">-->
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>

							<form method="POST" action="resgistro.controlador.php" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="nombre">Nombre</label>
									<input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>
									<div class="invalid-feedback">
										El nombre es obligatorio	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="tel">Celular</label>
									<input id="tel" type="number" class="form-control" name="tel" value="" required autofocus>
									<div class="invalid-feedback">
										El celular es obligatorio	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Email es invalido
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="pass">Contraseña</label>
									<input id="pass" type="password" class="form-control" name="pass" required>
								    <div class="invalid-feedback">
								    	Contraseña es obligatoria
							    	</div>
								</div>

								<div class="align-items-center d-flex">
									
									<button type="submit" class="btn btn-secondary ms-auto" name="registrar_usuario">
										Registrarse	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								¿Tiene una cuenta? <a href="login.vista.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../js/login.js"></script>
</body>
</html>