<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 15/09/2017
 * Time: 15:04
 */
session_start();
include "connect.inc.php";

//This is easier to use in sql queries
$email = $_SESSION['email'];
$domain = $_POST['subdomain'];

//Check if user is already registered
$sql1 = "SELECT * FROM main WHERE email='$email'";
$result1 = mysqli_query($conn, $sql1);

//Check for failed query
if (!$result1){
    echo "an error occured";
    header("location: /subdomain?error=sql");
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
    header("location: /subdomain?error=doubleAccount");
    exit();
}

//Check how many subdomains the user already has
//Update query with new user in the db if they still had to be registered
$result6 = mysqli_query($conn, $sql1);

//Check for failed query
if (!$result6){
    echo "an error occured";
    header("location: /subdomain?error=sql");
    exit();
}

//Set variables for some SQL queries from some SQL queries
$UID = mysqli_fetch_row($result6)[0]; //<-- [0] to select first select value from $sql1 query)
$max_domains = mysqli_fetch_row($result1)[2]; //<-- [2] to select max domains field from $sql1 query


//Use UID to see if they registered any domains
$sql3 = "SELECT * FROM registered_domains WHERE UID='$UID'";
$result3 = mysqli_query($conn, $sql3);
//Check for failed query
if (!$result3){
    echo "an error occured";
    header("location: /subdomain?error=sql");
    exit();
}

//Check for row numbers (rows = amount of registered domains)
$row = mysqli_num_rows($result3);
if ($row >= $max_domains)
{
    //Reached limit or is over limit
    header("location: /subdomain?error=limitReached");
    exit();
}
else
{
    /*Finally add the actual domain */
    include "cloudflare_api.inc.php";

    $data = [
        //'{"type":"A","name":"example.com","content":"127.0.0.1","ttl":120,"proxied":false}'
        "type" => "A",
        "name" => $_POST["subdomain"],
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
        header("location: /subdomain?error=curl");
        exit('Error: ' . curl_error($ch));
    }

    //Error handling API
    $response = json_decode($result, true)["errors"][0]["message"]; //Parse JSON and go to error response
    if($response == null) //Null means no erro message value
    {
        //User is allowed to add domain and no API errors. Domain is safe and can be added to DB
        $sql4 = "INSERT INTO registered_domains (UID, domain) VALUES ('$UID', '$domain')";
        $result4 = mysqli_query($conn, $sql4);
        //Check for failed query
        if (!$result4){
            echo "an error occured";
            header("location: /subdomain?error=api");
            exit();
        }

        //Return succes
        echo "API did not send back any errors";
        header("location: /subdomain?error=success");
        exit();
    } else
    {
        echo "API error: " . $response;
        $_SESSION['api_error'] = $response;
        header("location: /subdomain?error=api");
    }

}
