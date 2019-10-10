<?php include('app.php'); ?>
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
	<script src="https://kit.fontawesome.com/16514cbf08.js"></script>
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
			<?php if(isset($error)){foreach($error as $error){feedback($error);}} ?>
			<form action="" method="post" class="col-12">
				<div class="form-group row">
					<div class="col-md-4">
						<select class="form-control<?php displayError($errorGender); ?>" name="gender">
							<option selected disabled>Gender</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="o">Other</option>
						</select>
					</div>

					<div class="col-md-4">
						<input type="text" class="form-control<?php displayError($errorName); ?>" name="name" placeholder="Name" <?php displayValue($name); ?>>
					</div>

					<div class="col-md-4">
						<input type="text" class="form-control<?php displayError($errorLastname); ?>" name="lastname" placeholder="Lastname" <?php displayValue($lastname); ?>>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-6">
						<input type="text" class="form-control<?php displayError($errorMail); ?>" name="mail" placeholder="E-mail address" <?php displayValue($mail); ?>>
					</div>

					<div class="col-md-6">
						<select class="form-control<?php displayError($errorCountry); ?>" name="country">
							<option selected disabled>Country</option>
							<?php countrylist(); ?>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12">
						<select class="form-control<?php displayError($errorSubject); ?>" name="subject">
							<option disabled>Subject</option>
							<option value="hardware">Hardware</option>
							<option value="shipping">Shipping</option>
							<option value="other" selected>Other</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12">
						<textarea name="message" placeholder="Your message" class="form-control<?php displayError($errorMessage); ?>" rows="10"><?= $message; ?></textarea>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12 text-right">
						<button type="submit" name="submit" class="btn btn-submit btn-lg">Submit</button>
					</div>
				</div>
			</form>
		</section>
	</main>
</body>
</html>
