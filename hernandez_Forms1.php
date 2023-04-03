<!DOCTYPE html>
<html>
<head>
	<title>NBA Form Submission </title>
</head>
<body>
	<h1>NBA Form Submission</h1>
	<form method="post" action="hernandez_Forms2.php">
		<label for="firstname">Firstname:</label>
		<input type="text" id="firstname" name="firstname" required><br>

		<label for="lastname">Lastname:</label>
		<input type="text" id="lastname" name="lastname" required><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>