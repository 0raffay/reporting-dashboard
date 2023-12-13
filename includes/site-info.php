<?php
if(!isset($_SESSION)) {
    session_start();
}

//LOCAL:
$site_url = "http://localhost/reporting-dashboard/";

//LIVE:
// $site_url = "https://arraydigitals.com/reporting-dashboard/";


global $username;
$username = isset($_SESSION['user']['username']) ? $_SESSION['user']['username'] : null;

