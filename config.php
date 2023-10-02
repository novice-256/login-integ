<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('139848431166-k2gqhujlhguankhbumme0ovq7ib91pur.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login_integ/');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');