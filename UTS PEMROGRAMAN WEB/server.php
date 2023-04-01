<!--Muhammad Pajar_932020043_2TE2-->
<?php 
session_start(); 
include "database_c.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($username)) {
		header("Location: login.php?error=Username Wajib di Isi");
	    exit();
	}else if(empty($password)){
        header("Location: login.php?error=Password Wajib di Isi");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE user_name='$username' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $username && $row['password'] === $password) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: produk.php");
		        exit();
            }else{
				header("Location: login.php?error=Username dan Password Salah!!!!");
		        exit();
			}
		}else{
			header("Location: login.php?error=Username dan Password Salah!!!!");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}