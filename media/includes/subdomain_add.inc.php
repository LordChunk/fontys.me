<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 15/09/2017
 * Time: 15:04
 */
session_start();
include "connect.inc.php";

//Echo all client details
/*
?>
<h1>Welcome <?=$_SESSION['name']?></h1>
<ul>
    <?php foreach($_SESSION as $key => $value){
        echo "<li>$key => $value</li>";
    }?>
</ul>
<br><br>
<?php
*/

//This is easier to use in sql queries
$email = $_SESSION['email'];

//Check if user is already registered
$sql = "SELECT email FROM main WHERE email='$email'";
$result = mysqli_query($conn, $sql);

//Get no. of rows (Should be 0 for unregistered user and 1 for registered user)
$row = mysqli_num_rows($result);

if($row == 0)
{
    $sql = "INSERT INTO main (email, max_domains) VALUES ('$email', 1)";
    $result = mysqli_query($conn, $sql);
} elseif ($row == 1)
{
    echo "User is registered";
} else {
    echo "Your account has been registered twice. <br>This usually is the result of some kind of bug. <br>Please contact the developer at: j.vanooik@student.fontys.nl";
}






/*Finally add the actual domain */
/*include "cloudflare_api.inc.php";

$data = [
    //'{"type":"A","name":"example.com","content":"127.0.0.1","ttl":120,"proxied":false}'
    "type" => "A",
    "name" => $_POST["subdomein"],
    "content" => $_POST["IP"],
    "ttl" => '1',
    "proxied" => false,
    "X-Auth-Email" => "admin@jobvanooik.nl"
];

$headers = ["X-Auth-Email: ". $email, "X-Auth-Key: " . $token, "Content-Type: application/json"];

$ch = curl_init("https://api.cloudflare.com/client/v4/zones/". $dnszone . "/dns_records");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    exit('Error: ' . curl_error($ch));
}


//$json = json_decode($result, true)["errors"]/*[0]["message"]*/;
//var_dump($json);
//echo $json;
