<!DOCTYPE html>
<html>
<?php include 'header.php' ?>
<style type="text/css">
  body {
    background: #FFDE67;
  }
</style>
<?php session_start(); if(isset($_SESSION[ 'logged_in'])) { $url='home/index.php' ; echo '<script>window.location = "'.$url. '";</script>'; exit(); } ?> </head>

<body>
  <main class="home z-depth-1">
    <div class="container valign-wrapper " style='height:100%;position:relative'>
      <!-- Page Content goes here -->
      <div class="row valign nomargin" style="width:100%">
        <div class="col s12 center-align "> <img src="images/logo2.png" />
          <br>
          <h2 class="title">Chiron</h2>
          <p><i>"The wish for healing has <br>always been half of health."</i>
            <br> </p>
          <br>
          <br> <a href="register" class="waves-effect waves-light btn-large red">Get Started for free</a> </div>
      </div>
    </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a href="login" class="btn-floating btn-large red tooltipped" data-tooltip="Login" data-position="left" data-delay="50"> <i class="material-icons">add</i> </a>
    </div>
  </main>
  <?php include 'sidebar.php'; ?>
  <!--Import jQuery before materialize.js-->
  <?php include 'footer.php'; ?>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".button-collapse").sideNav();
    });
  </script>
</body>

</html>