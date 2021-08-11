<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<div class="wrapper">
	<div class="form">
		<div class="title">
			Login To Coding Market
		</div>
		<form method="post" action="successpage.html" onsubmit="return validation();">
			<div class="input_wrap">
				<label for="input_text">Email or Username</label>
				<div class="input_field">
					<input type="text" class="input" id="input_text">
				</div>
			</div>
			<div class="input_wrap">
				<label for="input_password">Password</label>
				<div class="input_field">
					<input type="password" class="input" id="input_password">
				</div>
			</div>
			<div class="input_wrap">
				<span class="error_msg">Incorrect username or password. Please try again</span>
				<input type="submit" id="login_btn" class="btn disabled" value="Login" disabled="true">
			</div>
		</form>
	</div>
</div>




<script src="app.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>