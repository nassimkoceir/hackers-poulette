<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hackers Poulette - Contact Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/style.min.css">
</head>
<body>
	<main class="container">
		<header class="row">
			<h1 class="col-12">
				<img src="assets/img/hackers-poulette-logo.png" />
			</h1>
		</header>

		<section class="row">
			<h2 class="col-12">Contact Us</h2>
			<form action="" method="post" class="col-12">
				<div class="form-group row">
					<div class="col-md-4">
						<select class="form-control"form="">
							<option selected disabled>Gender</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="o">Other</option>
						</select>
					</div>

					<div class="col-md-4">
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>

					<div class="col-md-4">
						<input type="text" class="form-control" name="lastname" placeholder="Lastname">
					</div>
				</div>
			</form>
		</section>
	</main>
</body>
</html>
