<?php
require_once '../config.php';
if(!(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_no']) && isset($_POST['type']) && isset($_POST['pass']) && isset($_POST['declaration'])))
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
$name        = mysqli_real_escape_string($conn,$_POST['name']);
$email       = mysqli_real_escape_string($conn,$_POST['email']);
$phone_no    = mysqli_real_escape_string($conn,$_POST['phone_no']);
$password    = md5(mysqli_real_escape_string($conn,$_POST['pass']));
$declaration = mysqli_real_escape_string($conn,$_POST['declaration']);
$type=mysqli_real_escape_string($conn,$_POST['type']);
//check for valid email and url
if((!filter_var($email, FILTER_VALIDATE_EMAIL))||($declaration != "on")) 
{
$response = new stdClass;
$response->status_code = 400;
$response->message     = "Invalid Parameters";
header("Content-Type:application/json");
echo json_encode($response);
return;
}
$res=mysqli_query($conn,"select * from `registrations` WHERE `email`='".$email."'");
if(mysqli_num_rows($res)>0)
{
$response = new stdClass;
$response->status_code = 400;
$response->message     = "User already registered!";
header("Content-Type:application/json");
echo json_encode($response);
return;
}
$query = "INSERT INTO registrations(name,email,type,mobile,password,declaration)
VALUES('".$name."','".$email."','".$type."','".$phone_no."','".$password."','".(bool)$declaration."')";
$result = $conn->query($query);
if($result===true)
{
if($type=='R')
{
$uniqueid=strtoupper("REC".uniqid());
$query = "INSERT INTO recruiters(userid,name,email,mobile)
VALUES('".$uniqueid."','".$name."','".$email."','".$phone_no."')";
$res = $conn->query($query);
mkdir('../home/Users/'.$uniqueid);
}
else
if($type=='J')
{
$uniqueid=strtoupper("JOB".uniqid());
$query = "INSERT INTO seekers(userid,name,email,mobile)
VALUES('".$uniqueid."','".$name."','".$email."','".$phone_no."')";
$res = $conn->query($query);
mkdir('../home/Users/'.$uniqueid);
}
$query = "INSERT INTO login(userid,type,email,password)
VALUES('".$uniqueid."','".$type."','".$email."','".$password."')";
$res = $conn->query($query);
$response = new stdClass;
$response->status_code = 200;
$response->message     = "Successful Registration";

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
