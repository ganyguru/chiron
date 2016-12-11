<?php
session_start();
require_once '../config.php';

if(!(isset($_POST['search'])))
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

$string=mysqli_real_escape_string($conn,$_POST['search']);
$tags=explode(' ', $string);
$jobs=array();

$j=0;
$query="SELECT * FROM jobs WHERE skills Like '%".$tags[0]."%' ";
for($j=1;$j<count($tags);$j++)
{
    $query.="OR skills Like '%".$tags[$j]."%' ";
}




class jtag
{
public $count=0;
public $jobid='';
 function _construct($count) {
    $this->count = $count;
}
}
$count="count";
$jobid="jobid";
function countSort( $a, $b ) 
{
    return $a->count == $b->count ? 0 : ( $a->count > $b->count ) ? 1 : -1;
}


$res=mysqli_query($conn,$query);
$j=0;
         
            while($row=mysqli_fetch_array($res))
             {
                    $jobs[$j]=new jtag;
         
                    $jobs[$j]->$jobid=$row['id'];
                    for($i=0;$i<count($tags);$i++)
                    {
                        if(strpos($row['title'], $tags[$i]) !== false)
                            $jobs[$j]->$count++;
                        if(strpos($row['skills'], $tags[$i]) !== false)
                            $jobs[$j]->$count++;
                        if(strpos($row['synopsis'], $tags[$i]) !== false)
                            $jobs[$j]->$count++;
                    }
                    $j++;  
             }


usort( $jobs, 'countSort' );
rsort( $jobs);
$result="";
for($i=0;$i<count($jobs);$i++)
{
    $query="Select * from jobs join recruiters on jobs.userid=recruiters.userid where jobs.id ='".$jobs[$i]->$jobid."'";
    $res=mysqli_query($conn,$query);

         
            while($row=mysqli_fetch_array($res))
             {
                $result.='<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">'.$row['title'].'</span><p><b>Skills:</b> '.$row['skills'].' <br><b>Description:</b> '.$row['synopsis'].'<br><b>Job Provider:</b> <a href="profile.php?id='.$row['userid'].'" target=_blank>'.$row['name'].'</a></p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';
             }
}

    $response = new stdClass;
    $response->status_code = 200;
    $response->message     = $result;
    $response->count     = count($jobs);
   
    echo json_encode($response);


$conn->close();

?>
