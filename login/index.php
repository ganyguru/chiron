<!DOCTYPE html>
<html>
  <head>
    <?php include 'header.php' ?>
    <style type="text/css">
    </style>

    <?php
include '../config.php';
session_start();
if(isset($_SESSION['auth_token']))
{
$url='../home/index.php';
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
          <div class="col s12 m12 l8 offset-l2 center-align ">
            <br>
            <br>
            <br>
            <img src="../images/logo2.png" width="70px"/>
            <br>
            <h4 class="title">Chiron
            </h4>
            <hr >
            <h5>Log in to your Chiron Account
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
              <span class="card-title">Card Title
              </span>
              <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row section">
        <form class="col 12 m12 l8 offset-l2" action="login.php" method="post" id="regform">
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" name="email" class="validate" placeholder="Please use the same email everywhere" required>
              <label for="email">Email
              </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="pass" type="password" name="pass" class="validate" required>
              <label for="pass" >Password
              </label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12 center-align">
              <button class="btn waves-effect waves-light large" id="submit" type="submit" name="action">Login
                <i class="material-icons right">lock_open
                </i>
              </button>
              <div class="preloader-wrapper small active" style="display:none">
                <div class="spinner-layer spinner-green-only">
                  <div class="circle-clipper left">
                    <div class="circle">
                    </div>
                  </div>
                  <div class="gap-patch">
                    <div class="circle">
                    </div>
                  </div>
                  <div class="circle-clipper right">
                    <div class="circle">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      </div>
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
      <a href="../login" class="btn-floating btn-large red tooltipped" data-tooltip="Login" data-position="left" data-delay="50" >
        <i class="material-icons">add
        </i>
      </a>
    </div>
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
    $(document).ready(function(){
      $('#regform').submit(function(e){
        if(!$('input[id="declaration"]').is(':checked'))
        {
          register();
          return false;
        }
        else
        {
          e.preventDefault();
          alert('Please Accept the declaration');
        }
      }
                          )
    }
                     )
    function register()
    {
      var data = new FormData($('#regform')[0]);
      $(".preloader-wrapper").show();
      $.ajax({
        method: "POST",
        url: "login.php",
        contentType: false,
        processData:false,
        dataType:'json',
        data:data
      }
            ).done(function(msg){
        if(msg.status_code==200)
        {
          $("#card").show();
          $(".card").removeClass('red');
          $(".card").removeClass('green');
          $(".card").addClass('green');
          $(".card-title").html('Successful Login!');
          $(".card-content p").html('hooray');
          $(".preloader-wrapper").hide();
          $("html, body").animate({
            scrollTop: 0 }
                                  , "slow");
          $('input').val("");
          location.reload();
        }
        else
        {
          $("#card").show();
          $(".card").removeClass('red');
          $(".card").removeClass('green');
          $(".card").addClass('red');
          $(".card-title").html('Failed Login!');
          $(".card-content p").html(msg.message);
          $(".preloader-wrapper").hide();
          $("html, body").animate({
            scrollTop: 0 }
                                  , "slow");
          $('input').val("");
        }
      }
                  ).fail(function(){
        $("#card").show();
        $(".card").removeClass('red');
        $(".card").removeClass('green');
        $(".card").addClass('red');
        $(".card-title").html('Failed Login!');
        $(".card-content p").html('Unable to Register. Please Contact Breadume for any issues');
        $(".preloader-wrapper").hide();
        $("html, body").animate({
          scrollTop: 0 }
                                , "slow");
        $('input').val("");
      }
                        )
    }
  </script>
  </body>
</html>
