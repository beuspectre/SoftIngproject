<?php
	
	$con = mysqli_connect('localhost', 'root', '');
	$select = mysqli_select_db($con, 'ecom_db');
	$gabime = array();

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
		
		
		if(count($gabime) == 0){
			
			$s = "select * from users where username = '$username' && password = '$password'";
		$result = mysqli_query($con, $s);
		$num = mysqli_num_rows($result);

	if($num == 1){
		while ($row = mysqli_fetch_assoc($result)) {
		$emri = $row["emri"];
		$_SESSION['emri'] = $emri;
		$_SESSION['logged']=1;
		header('location: index.php');	
}
}
else{
			array_push($gabime, "Te dhena te gabuara!");
		
		}
		

	}
	
}
	
	
	
		

?>