<!DOCTYPE html>
<!--Muhammad Pajar_932020043_2TE2-->
<html>
<head>
	<title>ElektroJarrShop | Login Page</title>
	<link rel="stylesheet" type="text/css" href="tampilan1.css">
</head>
<body>
     <form action="server.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="textnc" name="username" placeholder="Masukkan Username"><br>
     	<input type="password" name="password" placeholder="Masukkan Password"><br>

     	<button type="send">Login</button>
     </form>
</body>
</html>