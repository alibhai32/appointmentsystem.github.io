<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
		#one{
			color: black;
		}
		#one:hover{
			color: blue;
		}
	</style>
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Patient Login</h2>
</div>

<form method="post" action="login.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>

	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="password">
		
	<div class="input-groupD">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
</form>

</body>
</html>