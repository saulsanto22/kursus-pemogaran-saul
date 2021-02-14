<?php
$host=  'localhost';  
$pengguna=  'root' ;  
$pass=  '' ;  
$dbname='db_saulproject' ;  

try {
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $pengguna, $pass);

// echo"berhasil";
} catch (PDOException $x){
    die($x->getMessage());
    }


;

?>
