<?php
// Server Prod
// $dbhost = "182.23.104.212";
// $dbhost = "localhost";
// $dbusername = "beacukai";
// $dbpassword = "beacukai";
// $dbname = "tpbdb";
// $dbport = "3306";
// $dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());  

// Server Prod
// $dbhost='localhost';
// $dbusername='inxmiles_tpb';
// $dbpassword='Flatrone2241TPB';
// $dbname='inxmiles_tpb';
// $dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());

// Hellos ID Dev
// $dbhost='localhost';
// $dbusername='k8794920_tpb';
// $dbpassword='Flatrone2241TPB';
// $dbname='k8794920_tpb';
// $dbcon = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

// Server Dev
// $dbhost = "117.54.102.106";
// $dbusername = "beacukai";
// $dbpassword = "beacukai";
// $dbname = "tpbdb";
// $dbport = "3307";
// $dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());

// Local Am
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'tpbdb';
$dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno()); 

// if ($dbcon->connect_error) {
//   die("Connection failed: " . $dbcon->connect_error);
// }
// echo "Connected successfully";
