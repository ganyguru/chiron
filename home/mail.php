<!DOCTYPE html>
<html>
  <head>
    <?php include 'header.php' ?>
    <style type="text/css">
    </style>
    <?php
include '../config.php';
session_start();
if(!isset($_SESSION['logged_in']))
{
$url='../index.php';
echo '<script>window.location = "'.$url.'";</script>';
exit();
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
$query="Update `messages` set `seen`=1  WHERE `to`='".$_SESSION['userid']."'";
$result = $conn->query($query);
?>
  </head>
  <body>
    <main class="home">
      <div class="container " style='height:100%;position:relative'>
        <!-- Page Content goes here -->
        <div class="row center-align" style="width:100%" >
          <div class="col s12 m12 l10 offset-l1 center-align ">
            <br>
            <br>
            <br>
            <img src="../images/logo2.png" width="70px"/>
            <br>
            <h4 class="title">Breadume
            </h4>
            <hr >
            <h5>Welcome, 
              <?php echo $_SESSION['name']; ?>!
            </h5>
            <h6>Your Messages
            </h6>
            <br>
            </p>
        </div>
      </div>
      <br>
      <div class="row" id="card" style="display:none">
        <div class="col s12 m12 l8 offset-l2 center-align">
          <div class="card red darken-1">
            <div class="card-content white-text">
              <span class="card-title">
              </span>
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
      <?php
$table="";
if($_SESSION['userid'][0]=='R')
$table="recruiters";
else
$table="seekers";
$query2="Select *,`messages`.time msgtime from `messages` join `".$table."` on `messages`.to = `".$table."`.userid WHERE `to`='".$_SESSION['userid']."'";
$res=mysqli_query($conn,$query2);
while($row=mysqli_fetch_array($res))
{
echo '<div class="row">
<div class="col s12 l8 offset-l2">
<div class="card blue-grey darken-1">
<div class="card-content white-text">
<span class="card-title">'.$row['msgtime'].'</span>
<p>'.$row['message'].'</p>
</div>
<div class="card-action">
<a href="profile.php?id='.$row['fromm'].'">'.$row['name'].'</a>
</div>
</div>
</div>
</div>';
}
?>
    </main>
    <?php
include 'sidebar.php';
?>
    <!--Import jQuery before materialize.js-->
    <?php
include '../footer.php';
?>
    <script type="text/javascript">
      $( document ).ready(function() {
        $(".button-collapse").sideNav();
      }
                         );
    </script>
  </body>
</html>
