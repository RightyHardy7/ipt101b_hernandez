<!DOCTYPE html>
<html>
<head>
	<title> NBA Form Submission </title>
</head>
<body>
	<h1> NBA Form Submission </h1>

	<?php
		// Check if form was submitted using the POST method
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			// Retrieve form data
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];

			// Print form data
			echo "<p>Firstname: $firstname</p>";
			echo "<p>Lastname: $lastname</p>";
			echo "<p>Email: $email</p>";

			// Count the number of characters in the password
			$password_length = strlen($password);
			echo "<p>Password length: $password_length</p>";

			// Check if password and confirm password are equal
			if ($password == $confirm_password) {
				echo "<p>Passwords match</p>";
			} else {
				echo "<p>Passwords do not match</p>";
			}
		} else {
			// If form was not submitted using the POST method, do not process the form
			echo "<p>Error: Form was not submitted using the POST method</p>";
		}
	?>

</body>
</html>