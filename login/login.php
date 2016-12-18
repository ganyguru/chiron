<?php
session_start();
$_SESSION['auth_token']= "gg";
require_once '../config.php';

// if(!(isset($_POST['email']) && isset($_POST['pass'])))
// {
//     $response = new stdClass;
//     $response->status_code = 400;
//     $response->message     = "Missing Parameters";

//     header("Content-Type:application/json");
//     echo json_encode($response);

//     return;
// }



$email       = stripslashes($_POST['email']);

$password    = stripslashes($_POST['pass']);



// if((!filter_var($email, FILTER_VALIDATE_EMAIL))) 
// {
//     $response = new stdClass;
//     $response->status_code = 400;
//     $response->message     = "Invalid Parameters";

//     header("Content-Type:application/json");
//     echo json_encode($response);

//     return;
// }



$postData = array(
    'Username' => $email,
    'Password' => $password,
    
);

// Setup cURL
$ch = curl_init('http://4e16c88d.ngrok.io/admin/login');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($postData)
));
$result = curl_exec($ch);
// Send the request

//var_dump($response);
//print_r($response);
// if($result = curl_exec($ch))
// {
// $json=json_decode($result,true);

// //echo $json["Auth"];
// setcookie("auth_token", $json["Auth"], time() + (86400 * 30), "/");
// $response = new stdClass;
//     $response->status_code = 200;
//     $response->message     = "Successfully logged in";

//     header("Content-Type:application/json");
//     echo json_encode($response);

//     return;
// }

echo json_encode($result);

?>
