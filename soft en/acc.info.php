<?php
if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username ='".$username."' AND password='".$password."' LIMIT 1";
	$result = mysql_query($query);
	if (mysql_num_rows($result)==1) {
		//if logged in;
		while ($query_row = mysql_fetch_assoc($result)) {
			$priv1 = $query_row['privilege'];
		}
		if ($priv1 == 1) {
			$_SESSION['priv'] = 'faculty';
			header('Location: faculty_homepage.php');
		} else if ($priv1 == 0) {
			$_SESSION['priv'] = 'student';
			header('Location: student_homepage.php');
		}
		$_SESSION['logged'] = 1; //set logged in status as true

		die();
	}else {
		$_SESSION['logged'] = 0; //set logged in status as false, setup for error message
	}
}

?>
