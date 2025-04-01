<?php

$database= new mysqli("localhost","root","","ehealthdesk");
if ($database->connect_error){
    die("Connection failed:  ".$database->connect_error);
}


?>