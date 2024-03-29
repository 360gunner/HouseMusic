<?php
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>
<html>
<head>
	<title>Welcome to HouseMusic!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login !</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="ex. The360GUnnER" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create account !</h2>
			<p>
			<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="ex. The360GUnnER" value="<?php getInputValue('username') ?>" required>
			</p>

			<p>
			<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">First name</label>
				<input id="firstName" name="firstName" type="text" placeholder="ex. Houssem" value="<?php getInputValue('firstName') ?>" required>
			</p>

			<p>
			<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Last name</label>
				<input id="lastName" name="lastName" type="text" placeholder="ex. Kentache" value="<?php getInputValue('lastName') ?>" required>
			</p>

			<p>
			<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
			<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="ex. mata7chilich@gmail.com" value="<?php getInputValue('email') ?>" required>
			</p>

			<p>

				<label for="email2">Confirm email</label>
				<input id="email2" name="email2" type="email" placeholder="ex. mata7chilich@gmail.com" value="<?php getInputValue('email2') ?>" required>
			</p>

			<p>
			<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
			<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your password" required>
			</p>

			<p>
				<label for="password2">Confirm password</label>
				<input id="password2" name="password2" type="password" placeholder="Your password" required>
			</p>

			<button type="submit" name="registerButton">SIGN UP</button>
			
		</form>
	</div>

</body>
</html>