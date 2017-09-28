<?php
session_start();
include 'connect-Hera.inc.php';

//echo gettype($_POST[banner_naam]);

//Fancy anti SQL injection shit
$banner_naam = mysqli_real_escape_string($conn, $_POST['banner_naam']);
$foto_url = mysqli_real_escape_string($conn, $_POST['foto_url']);
$tekst = mysqli_real_escape_string($conn, $_POST['tekst']);
$email = $_SESSION['email'];

//Check if input has a valid string length
if (!$_SESSION['ingelogd'])
{
    header("Location: ../../#picture-add?add=false");
    exit();
} elseif (!$email)
{
    header("Location: ../../#picture-add?add=false");
    exit();
}
elseif (strlen($banner_naam) > 15 || strlen($banner_naam) < 1)
{
	header("Location: ../../#picture-add?add=false");
	exit();
} elseif (strlen($foto_url) > 400 || strlen($foto_url) < 1) 
{
	header("Location: ../../#picture-add?add=false");
	exit();
} elseif (strlen($tekst) > 400 || strlen($tekst) < 1) 
{
	header("Location: ../../#picture-add?add=false");
	exit();
}

//Strings have required lenght


//Sql query
//Old SQL query
//$sql ="INSERT INTO foto_list (banner_naam, foto_url, tekst) VALUES ('$banner_naam', '$foto_url', '$tekst')";

//Create template
$sql = "INSERT INTO foto_list (banner_naam, foto_url, tekst, email) VALUES (?, ?, ?, ?)";
//Create prepared statement
$stmt = mysqli_stmt_init($conn);
//Check if prepared statement doesn't work
if (!mysqli_stmt_prepare($stmt, $sql))
{
    echo "SQL failed";

    header("Location: ../../#picture-add?add=false");
    exit();
} else {
    //Bind var type to placeholders (?)
    mysqli_stmt_bind_param($stmt, "ssss", $banner_naam, $foto_url, $tekst, $email); //set datatype to string 3 times
    //execute query
    mysqli_stmt_execute($stmt);
}


header("Location: ../../#picture-add?add=true");

mysqli_close($conn);
?>