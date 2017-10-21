<?php
/* -------------------------------------------------------------------
 * You can use this page to login a user with the FHICT OpenID Server.
 * Be sure you copy the login_config.php.sample to login_config.php
 * and provide the right values.
 * You can request these at https://tas.fhict.nl/api/v1/
 *
 */

//Check for rejected login requests
if ($_GET["error"] === "access_denied")
{
    //echo "login rejected";
    session_start();
    header("location: " . $_SESSION['redirect_URL']);
    exit();
}

// Load the config file
require(__DIR__.'/login_config.inc.php');

if(DEBUG_MODE == true){
    ini_set('display_errors', '1');
    error_reporting(-1);
}

// You'll need to download phpseclib and add it to your include path
// Add phpseclib to the include path http://phpseclib.sourceforge.net/
// Add the OpenIDConnectClient also to the path
// This is a modified version of https://github.com/jumbojett/OpenID-Connect-PHP
set_include_path(get_include_path().PATH_SEPARATOR.'./lib/phpseclib0.3.10'.PATH_SEPARATOR.'./lib/OpenID-Connect-PHP');

// Include the openID client
require "OpenIDConnectClient.inc.php";

// Create a new client
$oidc = new OpenIDConnectClient(OPENID_SERVER,FHICT_CLIENT_ID,FHICT_CLIENT_SECRET);

// Add the right scopes
$oidc->addScope(explode(" ",FHICT_SCOPES));

// The actual authentication request happens here.
// The user will be redirected to our OpenID server.
// Be sure to handle user denied requests!
$oidc->authenticate();

// We need to start the session before we can put data in it.
session_start();

// Save some information in a session
// (given the right permission) you can find which information you can request here
// https://tas.fhict.nl/identity/.well-known/openid-configuration
$_SESSION['name'] = str_ireplace(",", ", ", $oidc->requestUserInfo('name'));  //This adds a bloody " " in between the comma and the surname
$_SESSION['username'] = $oidc->requestUserInfo('preferred_username');
$_SESSION['email'] = $oidc->requestUserInfo('email'); // needs 'email' scope
$_SESSION['roles'] = $oidc->requestUserInfo('role'); // needs 'roles' scope
$_SESSION['access_token'] = $oidc->getAccessToken();

// Add extra info to the session
$_SESSION['ingelogd'] = true;

//Add session timeout (the API server has a timeout but this isn't reported to the server or documented)
$_SESSION["timeout"] = time();

//Add new users to database
include "connect-Freaze.inc.php";

//This is easier to use in sql queries
$email = $_SESSION['email'];

//Check if user is already registered
$sql1 = "SELECT * FROM main WHERE email='$email'";
$result = mysqli_query($conn, $sql1);

//Check for failed query
if (!$result){
    echo "an error occured";
    header('Location: ' . $_SESSION['redirect_URL'] . "?error=db");
    exit();
}

//Get no. of rows (Should be 0 for unregistered user and 1 for registered user)
$row = mysqli_num_rows($result);

if($row == 0)
{
    //Register new user
    $sql2 = "INSERT INTO main (email, max_domains) VALUES ('$email', 1)";
    $result2 = mysqli_query($conn, $sql2);
    echo "Registered new user";
}

//Execute search again and cache UID
$result = mysqli_query($conn, $sql1);

$_SESSION["UID"] = mysqli_fetch_row($result)[0];

//Set group session variable (class name, this is needed for e.g. notifications per class)
require $_SERVER["DOCUMENT_ROOT"] . "/media/includes/FHICT_api.inc.php";
$service = new FHICTService();

$data = $service->getServiceData('/groups');
foreach ($data as $group)
{
    if ($group->{"groupType"} == "Klas")
    {
        $_SESSION["group"] = $group->{"groupName"};
    }
}

//Redirect back to the page we wanted to login too.
header('Location: ' . $_SESSION['redirect_URL']);
?>
