<?php
include("header.php");
session_start();
$akses = $_SESSION['akses'];
if ($akses == 'admin'){
	header("location : form.php");
}
else 
	echo "halaman boleh di akses";
include("footer.html");
?>