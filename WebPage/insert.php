<?php
    // to consume this api in html page
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    define('DB_USER',"root"); // database username
    define('DB_DATABASE',"Hackathon"); //database name
    define('DB_PASSWORD',""); //database password
    define('DB_SERVER',"localhost"); // database server
    
    
    
    // creating array for json response
    $response = array();

    //Check if we got the field from the user or not
    if(isset($_GET['distance1']))
    {
        $distance1 = $_GET['distance1'];

        //Connecting to database
        $con = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        
        // fire sql query to insert the data in weather
        $result =mysqli_query($con,"INSERT INTO ultrasonic(distance1) VALUES('$distance1')");

        //Check for the successful execution of query
        if($result)
        {
            //Successfully inserted
            $response["success"] = 1;
            $response["message"] = "Distance Successfully Added.";

            //Show json response
            echo json_encode($response);
        }
         mysqli_close($con);
    }
        else{
            //If required parameter is missing
            $response['success'] = 0;
            $response['message'] = "Parameter is missing. Please check the request";
            echo json_encode($response);
        }
       

?>