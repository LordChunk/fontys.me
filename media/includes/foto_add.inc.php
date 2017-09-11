<?php
include 'connect.inc.php';

//echo gettype($_POST[banner_naam]);

//Fancy anti SQL injection shit
$banner_naam = mysqli_real_escape_string($conn, $_POST['banner_naam']);
$foto_url = mysqli_real_escape_string($conn, $_POST['foto_url']);
$tekst = mysqli_real_escape_string($conn, $_POST['tekst']);


//Check if input has a valid string length
if (strlen($banner_naam) > 15 || strlen($banner_naam) < 1) 
{
	header("Location: ../#picture-add?add=false");
	exit();
} elseif (strlen($foto_url) > 400 || strlen($foto_url) < 1) 
{
	header("Location: ../#picture-add?add=false");
	exit();
} elseif (strlen($tekst) > 400 || strlen($tekst) < 1) 
{
	header("Location: ../#picture-add?add=false");
	exit();
}

//Strings have required lenght


//Sql query
$sql ="INSERT INTO foto_list (banner_naam, foto_url, tekst) VALUES ('$banner_naam', '$foto_url', '$tekst')";

//echo $sql;
if (mysqli_query($conn, $sql)) 
{
	echo "Added line <br>";
} else {
	echo "An error occured <br>";
}

header("Location: ../#picture-add?add=true");

mysqli_close($conn);
?>