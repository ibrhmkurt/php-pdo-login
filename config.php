<?php

    try{
        $host = "0.0.0.0:3306";
        $dbname = "pdo_login";
        $username = "root";
        $password = "password";
        $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", "$username", "$password");
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>