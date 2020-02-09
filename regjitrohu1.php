<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/cart.php"); ?>

<?php include(TEMPLATE_FRONT .  DS ."header.php") ?>
<head>
	<title>Log In/ Regjistrohu</title>
	<?php
	
	include("server.php"); ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		
			<div>
				<div class="login-box">
					<div class="log">
						<h2>Plotesoni fushat e meposhtme per tu regjistruar! :)</h2>
						<h4 style="font-family: serif; font-style: italic; font-weight: lighter; color: #DB5A6B">
					*Plotesimi i te gjitha fushave eshte i detyruar! <br>
					**Ne mbajme pergjegjesi te plote per ruajtjen e te dhenave tuaja personale!</h4>
						<form action="regjitrohu1.php" method="post">
						<div>
							<label>Perdoruesi</label>
							<input type="text" name="username"  
							required style="margin:10px 10px 10px 20px">
						</div>
						<div>
							<label>Fjalekalimi</label>
							<input type="password" name="password" 
							required style="margin:10px 10px 10px 16px">
						</div>
						<div>
							<label>Emri</label>
							<input type="text" name="emri" 
							required style="margin:10px 10px 10px 57px" >
						</div>
						<div>
							<label>Mbiemri</label> 
							<input type="text" name="mbiemri" 
							required style="margin:10px 10px 10px 33px">
						</div>
						<div>
							<label>Mosha</label>
							<input type="number" name="mosha"
							required style="margin:10px 10px 10px 46px">
						</div>
						<div>
							<label>Gjinia</label>
							<input type="radio" name="gjinia" value="mashkull" required
							style="margin:5px 10px 5px 70px"> M
     						<input type="radio" name="gjinia" value="femer" required checked="yes"> F
						</div>
						
						<div>
							<label>e-mail</label>
							<input type="text" name="email"  
							required style="margin:10px 10px 10px 50px">
						</div> 
						
						<button type="submit" class="butoni" name="register">Regjistrohu</button>
					</form>
					<br>
					<?php
					include("gabime.php");
					?><br>
					</div>
				</div>
			</div>
					
			
</body>
</html>