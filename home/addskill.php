<?php
session_start();
require_once '../config.php';

if(!(isset($_POST['skill'])))
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


$skill=mysqli_real_escape_string($conn,$_POST['skill']);;

$query = "INSERT INTO skills(skill,userid)
			VALUES('".$skill."','".$_SESSION['userid']."')";
			
$result = $conn->query($query);

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
