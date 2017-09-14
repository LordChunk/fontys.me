<?php
 include "credentials.php";

/* Poging 3 */
//https://stackoverflow.com/questions/31871071/translate-command-curl-to-php-curl-cloudflare-api

$data = [
    //'{"type":"A","name":"example.com","content":"127.0.0.1","ttl":120,"proxied":false}'
    "type" => "A",
    "name" => "APItest",
    "content" => "127.0.0.1",
    "ttl" => '1',
    "proxied" => false,
    "X-Auth-Email" => "admin@jobvanooik.nl",
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
echo "Test succesful";