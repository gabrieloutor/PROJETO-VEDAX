<?php
// Send an email with the Postmark-PHP library 
// Learn more -> http://developer.postmarkapp.com/developer-official-libs.html#php

// Install with composer
composer require wildbit/postmark-php

//Import
use Postmark\PostmarkClient;

// Example request
$client = new PostmarkClient("21720715-11a8-4797-a056-73a07021a4f2");

$sendResult = $client->sendEmail(
  "sender@example.org",
  "gabriel.outor@hotmail.com",
  "Hello from Postmark!",
  "This is just a friendly 'hello' from your friends at Postmark."
);
echo "chegou";
?>