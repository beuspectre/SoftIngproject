<?php
	$con = mysqli_connect('localhost', 'root', '');
	$select = mysqli_select_db($con, 'ecom_db');
	$gabime = array();

	if(isset($_POST['register'])){
		$username = $_POST['username'];
		$s = "select * from users where username like '$username'";
		$rezultat = mysqli_query($con, $s);
		$nr = mysqli_num_rows($rezultat);
		if($nr > 0){
			array_push($gabime, "Ky username eshte tashme ne perdorim! Ju lutemi, zgjidhni nje tjeter!");
		}
		$password = $_POST['password'];
		$emri = $_POST['emri'];
		$mbiemri = $_POST['mbiemri'];
		$gjinia = $_POST['gjinia'];
		$email = $_POST['email'];
		$mosha = (int) $_POST['mosha'];
		if(!strpos($email, '@')){
			array_push($gabime, "Emaili nuk eshte i sakte!");
		}
		

		if(count($gabime) == 0){
			$reg = " insert into users (username,email, password, Emer, Mbiemer, Gjinia, Mosha ) values 
		('$username', '$email' , '$password','$emri', '$mbiemri', '$gjinia', '$mosha')";
		$query = mysqli_query($con, $reg);
		header('location:login1.php');
		}
	}
	
	
	
		

?>