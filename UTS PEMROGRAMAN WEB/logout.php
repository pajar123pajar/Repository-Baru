<!--Muhammad Pajar_932020043_2TE2-->
<?php 
session_start();

session_unset();
session_destroy();

header("Location: login.php");