<!doctype html>
<html lang="en-US">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login</title>

	<link rel="stylesheet" href="css/login.css">

	<script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
        </script>

</head>

<body>

	<?php include("header-footer/header-reglog.php") ?>
	<div id="login">

		<h2><span class="fontawesome-lock"></span>Login</h2>

		<form action="../Config/LoginCheck.php" method="POST">

			<fieldset>
				<p><label for="username">Username</label></p>
				<p><input type="username" id="username" name="username" value="username" onBlur="if(this.value=='')this.value='username'" onFocus="if(this.value=='username')this.value=''"></p>

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p>

				<p><input type="submit" name ="login" value="Login"></p>
				<p>Belum punya akun? <a href="Register.php" class="daftar">Daftar Sekarang!</a></p>
			</fieldset>

		</form>
		<br> <br> <br> <br>
	</div> <!-- end login -->
	<?php include("header-footer/footer.php") ?>
</body>

</html>
