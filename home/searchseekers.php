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
$string=mysqli_real_escape_string($conn,$_POST['search']);
$tags=explode(' ', $string);
$jobs=array();
$skillset=array();
$j=0;
$query="SELECT * FROM skills WHERE skill Like '%".$tags[0]."%' ";
for($j=1;$j<count($tags);$j++)
{
$query.="OR skill Like '%".$tags[$j]."%' ";
}
//$query.="Group by userid";
$userid="";
class jtag
{
public $count=0;
public $jobid='';
public $skillset=array();
function _construct($count) {
$this->count = $count;
}
}
$count="count";
$jobid="jobid";
$skillset="skillset";
function countSort( $a, $b ) 
{
return $a->count == $b->count ? 0 : ( $a->count > $b->count ) ? 1 : -1;
}
$res=mysqli_query($conn,$query);
$j=0;
$k=0;         
while($row=mysqli_fetch_array($res))
{
if($userid!=$row['userid'])
{
$jobs[$j]=new jtag;
$jobs[$j]->$jobid=$row['userid'];
$userid=$row['userid'];
$j++;  
$k=0;
}
$jobs[$j-1]->$skillset[$k]=$row['skill'];
$k++;
}
for($i=0;$i<count($jobs);$i++)
for($j=0;$j<count($jobs[$i]->$skillset);$j++) 
for($k=0;$k<count($tags);$k++)
{
if(strpos($skillset[$j], $tags[$k]) !== false)
$jobs[$i]->$count++;
}
usort( $jobs, 'countSort' );
rsort( $jobs);
$result="";
for($i=0;$i<count($jobs);$i++)
{
$query="Select * from seekers where userid ='".$jobs[$i]->$jobid."'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
$result.='<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">'.$row['name'].'</span><p><b>View his/her profile:</b> <a href="profile.php?id='.$row['userid'].'" target=_blank>'.$row['name'].'</a></p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';
}
}
$response = new stdClass;
$response->status_code = 200;
$response->message     = $result;
$response->count     = count($jobs);
echo json_encode($response);
$conn->close();
?>
