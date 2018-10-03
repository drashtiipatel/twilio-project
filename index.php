<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 echo "You will get msg";
$sid    = "ACa2ae59874300045d810a55cc1a10c7f3"; 
$token  = "e58e45bc04a0b36c2bd251e577419c11"; 
$twilio = new Client($sid, $token); 

$message = $twilio->messages 
                  ->create("+19173490168", // to 
                           array( 
                               "from" => "+19733520445",       
                               "body" => "hello Drashti CS 643 Fall 2018 " 
                           ) 
                  ); 
 
