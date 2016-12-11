<?php
session_start();
require_once '../config.php';

if(!(isset($_POST['item']) && isset($_POST['value']) && isset($_POST['name'])))
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "Missing Parameters";

    header("Content-Type:application/json");
    echo json_encode($response);

    return;
}


$conn = new mysqli($hostname,$username,$password,$database);

if($conn->connect_error)
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "Unable to fetch response";

	header("Content-Type:application/json");
    echo json_encode($response);

    die("Connection Failed".$conn->connect_error);
}


$item=mysqli_real_escape_string($conn,$_POST['item']);
$value=mysqli_real_escape_string($conn,$_POST['value']);
$name=mysqli_real_escape_string($conn,$_POST['name']);

if($item==md5(0))
{
    $query = "DELETE FROM `documents` WHERE MD5(`id`)='".$value."'";
            
$result = $conn->query($query);
unlink("Users/".$_SESSION['userid']."/".$name);
}



if($result===true)
{
    

   
    $response = new stdClass;
    $response->status_code = 200;
    $response->message     = $skill;
    
    echo json_encode($response);
}						
else
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "Registration Failed";

    echo json_encode(mysqli_error($conn));
}

$conn->close();

?>
