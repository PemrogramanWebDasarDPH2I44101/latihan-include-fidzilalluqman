<?php  
session_start();
	include("header.php");
$_SESSION['nama'] = "Budi";
$_SESSION['akses'] = "admin";
$_SESSION['iduser'] = 1234;
print_r($_SESSION);  
include("footer.html");
?>