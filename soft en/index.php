<?php
require 'connect.inc.php';



session_start();
$_SESSION['logged'] = NULL;
require 'acc.info.php';

?>
<html>
<head>
	<title>My Website</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="style3.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div id="temporaryhelp">

	<input type="button" class="helpbutton" value="?" onclick = "hideshow(document.getElementById('hiddenmsg1'))" />
	</div>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="post" action="index.php">
				<input type="text" class="userpass" placeholder="username" name="username"/>
				<input type="password" class="userpass" placeholder="password" name="password"/>
				<input type="submit" name="submit" value="login" class="gbutton"/>
				<?php if ($_SESSION['logged'] !== NULL) { echo '<span style="color:red;">Invalid username/password</span><br />';} ?>
					<div id="hiddenmsg1" style="display:none;">
						<h3>Available accounts</h2>
							<h4>Faculty</h4>
							Username : staff1	<br />
							Password : staff1
							<h4>Student</h4></h4>
							Username : student1	<br />
							Password : student1

						</div>
					</form>
				</div>

		</div>






		<script type="text/javascript">
		function hideshow(which){
			if (!document.getElementById)
			return
			if (which.style.display=="block")
			which.style.display="none"
			else
			which.style.display="block"
		}
		</script>
	</body>
	</html>
