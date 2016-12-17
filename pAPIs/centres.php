<?php
$response=[];
$numrows=0;

if(isset($_GET['type']) && $_GET['type']!='' )
{
$conn_string = "host=localhost port=5432 user=postgres password=guru dbname=dev sslmode=disable";

$dbconn4 = pg_connect($conn_string);
	

$query="select base_data.id,base_data.name,base_data.district,base_data.phone,base_data.lat,base_data.long,count(vehicles.id) total,(SELECT count(*) from vehicles v where v.base_id=base_data.id and status=TRUE and v.type='".$_GET['type']."') ons,(SELECT count(*) from emergency e where e.base_id=base_data.id and e.type='".$_GET['type']."') handle from base_data join vehicles on base_data.id=vehicles.base_id where vehicles.type='".$_GET['type']."' and base_data.id!=11 GROUP BY base_data.id ;";


if($result = pg_exec($dbconn4, $query))
{
 $numrows = pg_numrows($result);
 for($ri = 0; $ri < $numrows; $ri++)
 {
 	$row = pg_fetch_array($result, $ri);
 	$response[$ri] = array(
    'id' => $row['id'],
    'name' => $row['name'],
    'district' => $row['district'],
    'phone' => $row['phone'],
    'total' => $row['total'],
    'lat' => $row['lat'],
    'long' => $row['long'],
    'on' => $row['ons'],        
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