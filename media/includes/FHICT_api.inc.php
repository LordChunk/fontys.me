<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 28/09/2017
 * Time: 14:41
 */
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FHICTService {
    const BASE_URL = 'https://api.fhict.nl/';

    public function __construct() {

    }

    public function getServiceData($servicePath) {
        $url = self::BASE_URL . $servicePath;
        $authorization = "Authorization: Bearer " . $this->getBearerToken();
        $curl = curl_init ($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array($authorization));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if($httpcode != 200) {
            //$this->login();
            return false;
        }
        return json_decode($result);

    }

    protected function getBearerToken() {
        if (isset($_SESSION['access_token']) && $_SESSION['access_token'] != '') {
            $accessToken = $_SESSION['access_token'];
        } else {
            //$this->login();
            return false;
        }
        return $accessToken;


        //Temp token
        //return "";
    }

    protected function login() {
        //header("location: login");

        return false;
    }
}


/*
 * include 'FHICTService';
 *
 * $service = new FHICTService();
 * $data = $service->getServiceData('/groups');
 *
 * //
 */

//require $_SERVER["DOCUMENT_ROOT"] . "/media/includes/FHICT_api.inc.php";
//$service = new FHICTService();
