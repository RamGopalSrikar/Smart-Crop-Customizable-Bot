<?php

 

DEFINE ('DBUSER', 'root');

DEFINE ('DBPW', '');

DEFINE ('DBHOST', 'localhost');

DEFINE ('DBNAME', 'mydb');

 

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);

if (!$dbc) {

    die("Database connection failed: " . mysqli_error($dbc));

    exit();

}

 

$dbs = mysqli_select_db($dbc, DBNAME);

if (!$dbs) {

    die("Database selection failed: " . mysqli_error($dbc));

    exit();

}

 
$slot =  $_POST['slot'];
$soilmoisture =  $_POST['soilmoisture'];
$humidity =  $_POST['humidity'];
$ldr =  $_POST['ldr'];
$disturbance =  $_POST['disturbance'];
$duration =  $_POST['duration'];

$query = "UPDATE mydb_table SET soilmoisture='$soilmoisture', humidity='$humidity', ldr='$ldr', disturbance='$disturbance',duration='$duration'WHERE id='$slot'";



$result = mysqli_query($dbc, $query) or trigger_error("Query MySQL Error: " . mysqli_error($dbc));

mysqli_close($dbc);

?>
