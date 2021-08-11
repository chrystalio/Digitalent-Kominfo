<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>

<body>
	<main id="main-holder">
		<h1 id="login-header">Halaman Login</h1>
		<p>Username/Password : admin</p>

		<div id="login-error-msg-holder">
			<p id="login-error-msg">Username / Password<span id="error-msg-second-line">Salah!</span></p>
		</div>

		<form id="login-form">
			<input type="text" name="username" id="username-field" class="login-form-field" placeholder="Username">
			<input type="password" name="password" id="password-field" class="login-form-field" placeholder="Password">
			<input type="submit" value="Login" id="login-form-submit">
		</form>

	</main>

	<script type="text/javascript" src="app.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
	</script>
</body>

</html>