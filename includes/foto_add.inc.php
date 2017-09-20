<?php
include 'connect.inc.php';

//echo gettype($_POST[banner_naam]);

//Fancy anti SQL injection shit
$banner_naam = $_POST['banner_naam'];
$foto_url = $_POST['foto_url'];
$tekst = $_POST['tekst'];


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

//Strings have required length

//Sql query
//$sql ="INSERT INTO foto_list (banner_naam, foto_url, tekst) VALUES ('$banner_naam', '$foto_url', '$tekst')";

if ($stmt = mysqli_prepare($conn, "INSERT INTO foto_list (banner_naam, foto_url, tekst) VALUES (?, ?, ?)"))
{
    /*Bind params*/
    mysqli_stmt_bind_param($stmt, "sss", $banner_naam, $foto_url, $tekst);

    /*Execute statement*/
    mysqli_stmt_execute($stmt);

    /*Close statement*/
    mysqli_stmt_close($stmt);

    echo "Added line <br>";
} else
{
	echo "An error occured <br>";
}

header("Location: ../#picture-add?add=true");

mysqli_close($conn);
?>