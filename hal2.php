<?php  
session_start();
include("header.php");
$akses = $_SESSION['akses'];
if ($akses == 'admin'){
	echo "halaman boleh di akses";
}
else
	header("location : form.php");
include("footer.html");
?>