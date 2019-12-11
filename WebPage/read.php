<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

define('DB_USER',"root"); // database username
define('DB_DATABASE',"Hackathon"); //database name
define('DB_PASSWORD',""); //database password
define('DB_SERVER',"localhost"); // database server
//Creating Array for JSON response
$response = array();
 
 // Connecting to database 
$con = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
 
 // Fire SQL query to get all data from weather
$result = mysqli_query($con, "SELECT *FROM location") or die(mysql_error());
 
if(! $result ) {
    die('Could not get data: ' . mysql_error());
    $response["success"] = 0;
    $response["message"] = "Error";
    echo json_encode($response);
 }
 else{
 while($row = mysqli_fetch_assoc($result)) {
    echo "ID :{$row['id']}  <br> ".
       "Address : {$row['address']} <br> ".
       "Time : {$row['time']} <br>".
       "--------------------------------<br>";
 }
 $response["success"] = 1;
 $response["message"] = "Data Retrived";
 echo json_encode($response);
}
 mysqli_close($con);
?>
