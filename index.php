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
				<img src="assets/img/hackers-poulette-logo.png" alt="Hackers Poulette" />
			</h1>
		</header>

		<section class="row">
			<h2 class="col-12">Contact Us</h2>
			<form action="index.php" method="post" class="col-12">
				<div class="form-group row">
					<div class="col-md-4">
						<label for="gender">Select your gender</label>
						<select id="gender" class="form-control<?php displayError($errorGender ?? null); ?>" name="gender" required>
							<option selected disabled>Gender</option>
							<option value="m" <?php if(isset($gender)){echo ($gender == 'm')? 'selected' : null;} ?>>Male</option>
							<option value="f" <?php if(isset($gender)){echo ($gender == 'f')? 'selected' : null;} ?>>Female</option>
							<option value="o" <?php if(isset($gender)){echo ($gender == 'o')? 'selected' : null;} ?>>Other</option>
						</select>
						<?php if(isset($error['gender'])){feedbackForm($error['gender'], "invalid");} ?>
					</div>

					<div class="col-md-4">
						<label for="name">Your name</label>
						<input id="name" type="text" class="form-control<?= displayError($errorName ?? null); ?>" name="name" placeholder="Name" value="<?= $name ?? ""; ?>" required>
						<?php if(isset($error['name'])){feedbackForm($error['name'], "invalid");} ?>
					</div>

					<div class="col-md-4">
						<label for="lastname">Your lastname</label>
						<input id="lastname" type="text" class="form-control<?= displayError($errorLastname ?? null); ?>" name="lastname" placeholder="Lastname" value="<?= $lastname ?? ""; ?>" required>
						<?php if(isset($error['lastname'])){feedbackForm($error['lastname'], "invalid");} ?>
						<input type="text" class="h0neyp0t" name="honey" placeholder="honey">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-6">
						<label for="mail">Your email</label>
						<input id="mail" type="text" class="form-control<?php displayError($errorMail ?? null); ?>" name="mail" placeholder="E-mail address" value="<?= $mail ?? ""; ?>" required>
						<?php if(isset($error['mail'])){feedbackForm($error['mail'], "invalid");} ?>
					</div>

					<div class="col-md-6">
						<label for="country">Select your country</label>
						<select id="country" class="form-control<?php displayError($errorCountry ?? null); ?>" name="country" required>
							<?php countrylist($country ?? null); ?>
						</select>
						<?php if(isset($error['country'])){feedbackForm($error['country'], "invalid");} ?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12">
						<label for="subject">Select your subject</label>
						<select id="subject" class="form-control<?php displayError($errorSubject ?? null); ?>" name="subject" required>
							<option disabled>Subject</option>
							<option value="hardware" <?php if(isset($subject)){echo ($subject == 'hardware')? 'selected' : null;} ?>>Hardware</option>
							<option value="shipping" <?php if(isset($subject)){echo ($subject == 'shipping')? 'selected' : null;} ?>>Shipping</option>
							<option value="other" <?php if(isset($subject)){echo ($subject == 'other')? 'selected' : null;} else {echo 'selected';} ?>>Other</option>
						</select>
						<?php if(isset($error['subject'])){feedbackForm($error['subject'], "invalid");} ?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-12">
						<label for="message">Your message</label>
						<textarea id="message" name="message" placeholder="Your message" class="form-control<?php displayError($errorMessage ?? null); ?>" rows="10" required><?= $message ?? ""; ?></textarea>
						<?php if(isset($error['message'])){feedbackForm($error['message'], "invalid");} ?>
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
