<?php
$response=[];
$numrows=0;

if(isset($_GET['user']) && $_GET['user']!='')
{
$conn_string = "host=localhost port=5432 user=postgres password=guru dbname=dev sslmode=disable";

$dbconn4 = pg_connect($conn_string);
	
if(isset($_GET['type']))
$query="select emergency.id,emergency.lat,emergency.long,emergency.phone,emergency.name,TO_CHAR(emergency.time, 'DD-MM-YYYY HH24:MI:SS') as time,emergency.type,vehicles.driver,vehicles.vehicle_no,vehicles.phone vphone from emergency JOIN vehicles on vehicles.id=emergency.vehicle_id where emergency.type='".$_GET['type']."' AND emergency.base_id='".$_GET['user']."' AND emergency.status=TRUE";
else
$query="select emergency.id,emergency.base_id,emergency.lat,emergency.long,emergency.phone,emergency.name,TO_CHAR(emergency.time, 'DD-MM-YYYY HH24:MI:SS') as time,emergency.type,vehicles.driver,vehicles.vehicle_no,vehicles.phone vphone from emergency JOIN vehicles on vehicles.id=emergency.vehicle_id where emergency.base_id='".$_GET['user']."' AND emergency.status=TRUE";

if($result = pg_exec($dbconn4, $query))
{
 $numrows = pg_numrows($result);
 for($ri = 0; $ri < $numrows; $ri++)
 {
 	$row = pg_fetch_array($result, $ri);

 	$response[$ri] = array(
    'id' => $row['id'],
    'baseid' => $row['base_id'],
    'vehicle' => $row['vehicle_id'],
    'lat' => $row['lat'],
    'long' => $row['long'],
    'phone' => $row['phone'],
    'name' => $row['name'],
    'time' => $row['time'],
    'type' => $row['type'],
    'driver' => $row['driver'],
    'vehicle_no' => $row['vehicle_no'],
    'vphone' => $row['vphone']
    
	);

 }
 echo json_encode($response);
 //echo $numrows;
}
else
echo $numrows;
}
else
echo 'Request Error';

//echo $query;
?>