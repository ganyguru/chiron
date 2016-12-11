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
else if(!isset($_GET['id']))
{
$url='index.php';
echo '<script>window.location = "'.$url.'";</script>';
exit();
}
$id=$_GET['id'];
$type=$id[0];
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
            </p>
        </div>
      </div>
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
if($type=='J')
{
include 'seekerview.php';
}
else
include 'recruitview.php';
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
