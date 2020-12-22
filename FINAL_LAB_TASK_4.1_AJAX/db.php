<?php

$location 	= 'localhost';
$dbuser		= 'root';
$dbpass		= '';
$database	= 'check_email'; 

function getConnection()
{
    
    global $location;
    global $dbuser;
    global $dbpass;
    global $database;

    $conn = mysqli_connect($location, $dbuser, $dbpass, $database);
    
    if($conn)
    {
        return $conn;
    }
    else
    {
        die("Connection error:". mysqli_connect_error());
    }
}



function checkUniqe($email)
{
    $conn = getConnection();

    $sql = "SELECT * FROM check_mail WHERE email = '$email'"; 

    if($result = mysqli_query($conn,$sql)){

        if(mysqli_num_rows($result)>0)
        {
            return true;
        }
    }
    else
    {
        die("Error: ". mysqli_error($conn));
    }

    return false;
}


function insertionEmail($email)
{
    $conn = getConnection();

    $sql = "INSERT INTO check_mail VALUES ('$email')";
    
    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else{
        die("Error: ". mysqli_error($conn));
    }
    return false;
}


?>