<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if (empty($username) || empty($email) || empty($year) || empty($pwd)) {
		header("Location: ../register.php?register=empty");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $username)) {
			header("Location: ../register.php?register=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../register.php?register=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_email='$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../register.php?register=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_name, user_email, user_year, user_pwd) VALUES ('$username', '$email', '$year', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../login.php?register=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../register.php");
	exit();
}
