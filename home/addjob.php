<?php
session_start();
require_once '../config.php';

if(!(isset($_POST['skills']) && isset($_POST['title'])&& isset($_POST['synopsis'])))
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

$title=mysqli_real_escape_string($conn,$_POST['title']);
$skills=mysqli_real_escape_string($conn,$_POST['skills']);
$desc=mysqli_real_escape_string($conn,$_POST['synopsis']);

$query = "INSERT INTO jobs(title,synopsis,skills,userid)
			VALUES('".$title."','".$desc."','".$skills."','".$_SESSION['userid']."')";
			
$result = $conn->query($query);

if($result===true)
{
    

   
    $response = new stdClass;
    $response->status_code = 200;
    $response->message     = '<span class="title">'.$title.'</span><p><b>Skills:</b> '.$skills.' <br><b>Description:</b> '.$desc.'</p>';
   
    echo json_encode($response);
}						
else
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = 'Sorry :(';

    echo json_encode($response);
}

$conn->close();

?>
