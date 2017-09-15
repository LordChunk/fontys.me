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
$domain = $_POST['subdomein'];

//Check if user is already registered
$sql1 = "SELECT * FROM main WHERE email='$email'";
$result1 = mysqli_query($conn, $sql1);

//Check for failed query
if (!$result1){
    echo "an error occured";
    header("location: /subdomain?success=false");
    exit();
}

//Get no. of rows (Should be 0 for unregistered user and 1 for registered user)
$row = mysqli_num_rows($result1);

if($row == 0)
{
    //Register new user
    $sql2 = "INSERT INTO main (email, max_domains) VALUES ('$email', 1)";
    $result2 = mysqli_query($conn, $sql2);
    echo "Registered new user";
}
elseif ($row !== 1)
{
    echo "Your account has been registered twice. <br>This usually is the result of some kind of bug. <br>Please contact the developer at: j.vanooik@student.fontys.nl";
    exit();
}

//Check how many subdomains the user already has
//Update query with new user in the db if they still had to be registered
$result1 = mysqli_query($conn, $sql1);
//Check for failed query
if (!$result1){
    echo "an error occured";
    header("location: /subdomain?success=false");
    exit();
}

$UID = mysqli_fetch_row($result1)[0]; //<-- [0] to select first select value from $sql1 query)
$max_domains = mysqli_fetch_row($result3)[2]; //<-- [2] to select max domains field from $sql1 query


//Use UID to see if they registered any domains
$sql3 = "SELECT * FROM registered_domains WHERE UID='$UID'";
$result3 = mysqli_query($conn, $sql3);
//Check for failed query
if (!$result3){
    echo "an error occured";
    header("location: /subdomain?success=false");
    exit();
}

//Check for row numbers (rows = amount of registered domains)
$row = mysqli_num_rows($result3);
if ($row >= $result3)
{
    //Reached limit or is over limit
    header("location: /subdomain?success=false");
}
else
{
    //User is allowed to add domain, first add registered domain to database
    $sql4 = "INSERT INTO registered_domains (UID, domain) VALUES ('$UID', $domain)";
    $result4 = mysqli_query($conn, $sql4);

    //Check for failed query
    if (!$result4){
        echo "an error occured";
       // header("location: /subdomain?success=false");
        exit();
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
        header("location: /subdomain?success=false?apierror=true");
        exit('Error: ' . curl_error($ch));
    }


    //$json = json_decode($result, true)["errors"]/*[0]["message"]*/;
    //var_dump($json);
    //echo $json;

}
