<?php
$response=[];
$numrows=0;

if(isset($_GET['type']) && $_GET['type']!='' )
{
$conn_string = "host=localhost port=5432 user=postgres password=guru dbname=dev sslmode=disable";

$dbconn4 = pg_connect($conn_string);
	

$query="select vehicles.id,vehicles.lat,vehicles.long,vehicles.status,vehicles.driver, vehicles.phone,vehicles.vehicle_no,(select count(*) from emergency e where e.vehicle_id=vehicles.id) handle from vehicles where vehicles.type='".$_GET['type']."';";


if($result = pg_exec($dbconn4, $query))
{
 $numrows = pg_numrows($result);
 for($ri = 0; $ri < $numrows; $ri++)
 {
 	$row = pg_fetch_array($result, $ri);
 	$response[$ri] = array(
    'id' => $row['id'],
    'driver' => $row['driver'],
    'vehicle_no' => $row['vehicle_no'],
    'phone' => $row['phone'],    
    'lat' => $row['lat'],
    'long' => $row['long'],
    'status' => $row['status'],        
    'handle' => $row['handle']
    
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