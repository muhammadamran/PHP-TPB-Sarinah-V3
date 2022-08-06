<?php
$dbhost='localhost';
$dbusername='inxmiles_tpb';
$dbpassword='Flatrone2241TPB';
$dbname='inxmiles_tpb';
$dbcon = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());
// $dbhost='localhost';
// $dbusername='k8794920_tpb';
// $dbpassword='Flatrone2241TPB';
// $dbname='k8794920_tpb';
// $dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname) or die(mysqli_connect_errno());

// $dbhost = "117.54.102.106";
// $dbusername = "beacukai";
// $dbpassword = "beacukai";
// $dbname = "tpbdb";
// $dbport = "3307";
// $dbcon = new mysqli($dbhost, $dbusername, $dbpassword, $dbname, $dbport) or die(mysqli_connect_errno());

// Check connection
if ($dbcon->connect_error) {
    die("Connection failed: " . $dbcon->connect_error);
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TPB | Connection</title>
</head>

<body></body>

</html>