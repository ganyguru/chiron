<?php
session_start();
require_once '../config.php';




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


try
{   
    

    $temp_name = rand(1000,99999).'_'.basename($_FILES['cv']['name']);

    if(!move_uploaded_file($_FILES['cv']['tmp_name'],"Users/".$_SESSION['userid']."/".$temp_name))
    {
        throw new Exception("File Upload Error", 1);
    }
}
catch(Exception $e)
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "File Upload Error " ;

    header("Content-Type:application/json");
    echo json_encode($response);

    return;
}


$query = "INSERT INTO documents(name,userid)
			VALUES('".$temp_name."','".$_SESSION['userid']."')";
			
$result = $conn->query($query);

$dataid="";


$query = "SELECT *
FROM   documents

ORDER  BY time DESC
LIMIT  1";
            
$res = mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
    $dataid=$row['id'];
}


if($result===true)
{
    

   
    $response = new stdClass;
    $response->status_code = 200;
    $response->message     = '<li class="collection-item"><div>'.$temp_name.'<a href="Users/'.$_SESSION['userid'].'/'.$temp_name.'" class="secondary-content tooltipped" data-tooltip="Download" data-position="top" data-delay="50"><i class="material-icons">play_for_work</i></a> <a href="#!" onclick="removeitem(\''.md5(0).'\', \''.md5($dataid).'\',\''.$temp_name.'\')" class="secondary-content tooltipped" data-tooltip="Remove" data-position="top" data-delay="50"><i class="material-icons">not_interested</i></a></div></li>';
   
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
