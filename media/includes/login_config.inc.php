<?php
/* register your client at https://api.fhict.nl/Documentation/RequestAccess
 * copy this file to login_config.inc.php
 * fill in the right values
 * try it!
 */

define('DEBUG_MODE',true); //If true, set display errors to all.
define('OPENID_SERVER','https://identity.fhict.nl'); //The url of the login server. Defaults to https://tas.fhict.nl/identity
define('FHICT_CLIENT_ID','i380420-dashboardf'); // will be provided to you, when you register your client
define('FHICT_CLIENT_SECRET','Rjr75*yEeSSZaDCTaEqMMoMtASEfT4nZyK1rOVLx'); // will be provided to you, when you register your client
define('FHICT_SCOPES','fhict fhict_personal openid profile email'); // space delimited list of registered scopes, defaults to 'openid profile'


?>
