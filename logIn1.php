<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .  DS ."header.php") ?>
<html>
<head>
	<title>Log In/ Regjistrohu</title>
	<?php
	
	include("server2.php"); ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		
			<div class="container">
				<div class="login-box">
					<div class="log">
						<h2>Log In </h2>
						<form action="logIn1.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" 
							required style="margin-top: 10px; margin-bottom: 10px">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" 
							required style="margin-top: 10px; margin-bottom: 10px" >
						</div>
						<button type="submit" class="butoni" name="login">Log In</button>
					</form>
					<br>
					<?php
					include("gabime.php");
					?><br>
			<h4>Nuk jeni i regjistruar? Regjistrohuni 
				<a href="regjitrohu1.php">ketu.</a></h4>
					</div>
				</div>
			</div>
					
			
</body>
</html>