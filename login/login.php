<?php
require_once '../config.php';

if(!(isset($_POST['email']) && isset($_POST['pass'])))
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "Missing Parameters";

    header("Content-Type:application/json");
    echo json_encode($response);

    return;
}


// $conn = new mysqli($hostname,$username,$password,$database);

// if($conn->connect_error)
// {
//     $response = new stdClass;
//     $response->status_code = 400;
//     $response->message     = "Unable to fetch response";

//     header("Content-Type:application/json");
//     echo json_encode($response);

//     die("Connection Failed".$conn->connect_error);
// }



$email       = stripslashes($_POST['email']);

$password    = stripslashes($_POST['pass']);


//check for valid email and url
if((!filter_var($email, FILTER_VALIDATE_EMAIL))) 
{
    $response = new stdClass;
    $response->status_code = 400;
    $response->message     = "Invalid Parameters";

    header("Content-Type:application/json");
    echo json_encode($response);

    return;
}



//POST Request to Hasura
$url = 'https://auth.archon40.hasura-app.io/login';
$data = array('username' => $email, 'password' => $password);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);


echo json_encode($response);
                    

$conn->close();

?>
