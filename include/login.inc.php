<?php

session_start();

if (isset($_POST['submit'])) {

	include 'db.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	if (empty($email) || empty($pwd)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=error1");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error2");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					// $_SESSION['u_id'] = $row['user_id'];

					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['user_email'] = $row['user_email'];
					$_SESSION['user_year'] = $row['user_year'];

					header("Location: ../index.php");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../login.php?login=error3");
	exit();
}
