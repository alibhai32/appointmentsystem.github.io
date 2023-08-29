<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="../doctor/style/style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<style>
		.btn{
			background-color: #423289;
		}
		#one{
			color: #423289;
		}
	</style>
</head>

<header>
	<h1 id="one">Doctor<span>Panel</span></h1>
		<nav>
		<ul> 
		<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="../../index.php">Logout</a></li>
			
	</nav>
</header>
<body>
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2" >
	</div>
	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>
		</form>
	</form>
</body>
</html>


