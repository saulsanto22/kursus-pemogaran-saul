<?php

$db_host = "sql204.epizy.com";
$db_user = "epiz_27930389";
$db_pass = "VpPe8iy47fFUJ0b";
$db_name = "epiz_27930389_users";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}


