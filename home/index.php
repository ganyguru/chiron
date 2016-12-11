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
if($_SESSION['type']=='J')
{
include 'seeker.php';
}
else
include 'recruiter.php';
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
