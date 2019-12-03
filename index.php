<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Andreia Store</title>
	<link rel="stylesheet" type="text/css" href="media/css/custom/index.css">
	<link rel="stylesheet" type="text/css" href="media/css/resource/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="media/css/resource/fontawesome/all.min.css">	
	<link rel="icon" type="img/png" href="img/logo.png" sizes="24x24">
</head>
<body>

	<header>
		<div class="container-fluid mb-3">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-4">

						<div class="row">
							<div class="col-4">
								<a href="index.php"><img src="media/img/banner.png" height="100"></a>
							</div>

							<div class="col-6 my-auto">
								<div class="input-group">
									<input type="text" class="form-control" aria-label="Recipient's username" placeholder="Pesquise..." aria-describedby="basic-addon2">
									<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
								</div>
							</div>

							<div class="col-2 my-auto text-right">
								<a href="#login"><i class="fas fa-user"></i></a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		
		<ul id="menu">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<a href="calcados.php"><li>Calçados</li></a>
							<a href="semijoias.php"><li>Semijóias</li></a>
							<a href="sobre.html"><li>Sobre</li></a>
							<a href="#contato"><li>Contato</li></a>
						</div>
					</div>
				</div>
			</div>
		</ul>

	</header>

	<content>
						
		<div id="carouselIndicators" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
				<div class="carousel-item active bg-dark">
					<img src="media/img/capa.png" class="d-block w-100 carousel-img" alt="1">
				</div>

				<div class="carousel-item bg-secondary">
					<img src="media/img/banner1.png" class="d-block w-100 carousel-img" alt="2">
				</div>

				<div class="carousel-item bg-dark">
					<img src="media/img/banner2.png" class="d-block w-100 carousel-img" alt="3">
				</div>

				<div class="carousel-item bg-secondary">
					<img src="media/img/banner3.png" class="d-block w-100 carousel-img" alt="4">
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Próximo</span>
			</a>
		</div>

		<div class="container-fluid">
			<div class="container">

				<div class="row">
					<div class="col-12 text-center">
						<a href="calcados.php"><img src="media/img/blackfriday.png" class="my-4" id="desconto"></a>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						
						<div class="row">
							<div class="col-12">
								<div class="text-center">
									<h1>Lançamentos</h1>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-3">
								<div class="card mb-3">
									<div class="card-img-top">
										<img src="media/img/shoes1_1.jpg" class="w-100">
									</div>

									<div class="card-body">
										
										<div>
											<small>R$ 149,99</small>
										</div>
										<div>
											R$ 129,99
										</div>

									</div>
								</div>
							</div>
						
							<div class="col-3">
								<div class="card mb-3">
									<div class="card-img-top">
										<img src="media/img/shoes2_1.jpg" class="w-100">
									</div>
									<div class="card-body">
										
										<div>
											<small>R$ 109,99</small>
										</div>
										<div>
											R$ 99,99
										</div>

									</div>
								</div>
							</div>
						
							<div class="col-3">
								<div class="card mb-3">
									<div class="card-img-top">
										<img src="media/img/shoes3.jpg" class="w-100">
									</div>
									<div class="card-body">
										
										<div>
											<small>R$ 169,99</small>
										</div>
										<div>
											R$ 139,90
										</div>

									</div>
								</div>
							</div>
						
							<div class="col-3">
								<div class="card mb-3">
									<div class="card-img-top">
										<img src="media/img/shoes4.jpg" class="w-100">
									</div>
									<div class="card-body">
										
										<div>
											<small>R$ 135,50</small>
										</div>
										<div>
											R$ 119,90
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="contato">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-6 offset-md-3 my-5 text-center">

							<p class="text-white">Receba nossas novidades por e-mail!</p>

							<input type="text" name="nome" id="nome" class="form-control mb-3" placeholder="Seu nome">
							<input type="email" name="email" id="email" class="form-control" placeholder="Seu e-mail">

							<button type="submit" class="btn btn-s btn-light btn-block mt-4">Enviar</button>

						</div>
					</div>
				</div>
			</div>
		</div>

	</content>

	<footer>
		
		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-4 my-4">

						<p>Atendimento</p>

						<table>
							<tbody>
								<tr>
									<td><a href="https://www.instagram.com"><i class="fab fa-instagram pr-2 text-dark"></i></a></td>
									<td><small>@andreiastorebnu</small></td>
								</tr>

								<tr>
									<td><a href="https://www.tweeter.com"><i class="fab fa-twitter pr-2 text-dark"></i></a></td>
									<td><small>@andreiastorebnu</small></td>
								</tr>

								<tr>
									<td><a href="https://www.facebook.com"><i class="fab fa-facebook-f text-dark"></i></a></td>
									<td><small>@andreiastore</small></td>
								</tr>

								<tr>
									<td><a href="https://www.web.whatsapp.com"><i class="fab fa-whatsapp text-dark"></i></a></td>
									<td><small>(47) 9 9934 0994</small></td>
								</tr>
							</tbody>
						</table>

					</div>

					<div class="col-4 my-4 pt-4 text-center">
						<img src="media/img/logo.png">
					</div>

					<div class="col-4 my-4 text-right">
						<p>Empresa</p>
						<small>Rua Itajaí, 2229</small><br>
						<small>Bairro Sete de Setembro</small><br>
						<small>Gaspar - SC</small>
					</div>
				</div>

				<div class="text-center">
					<p>&copy; Direitos reservados a Andreia Store.</p>
				</div>
			</div>
		</div>

	</footer>


	<script src="media/js/resource/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>
</html>