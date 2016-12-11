<nav class="transparent noshadow z-depth-1" style="position:absolute;box-shadow:0 0 0 0;">
  <?php
$count=0;
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
$query="SELECT * FROM `messages` WHERE `to`='".$_SESSION['userid']."' and `seen`=0";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
$count++;
}
?>
  <ul class="right hide-on-med-and-down">
    <?php
if($count>0)
echo '<li><a href="mail.php"><i class="material-icons" style="color:brown">chat_bubble_outline<span class="new badge" style="font-family:roboto">'.$count.'</span></i></a></li>';
else
echo '<li><a href="mail.php"><i class="material-icons" style="color:brown">chat_bubble_outline</i></a></li>';
?>
    <li>
      <a class='dropdown-button' href='#' data-activates='user'>
        <i class="material-icons" style="color:brown">perm_identity
        </i>
      </a>
      <ul id='user' class='dropdown-content'>
        <li>
          <a href="index.php">User Profile
          </a>
        </li>
        <li>
          <a href="logout.php">Logout
          </a>
        </li>
      </ul>
    </li>
  </ul>
  <ul id="slide-out" class="side-nav">
    <li>
      <br>
      <center>
        <img src="../images/logo2.png" width="75px"/>
      </center>
    </li>
    <li>
      <center>
        <h2 class="title2">Breadume
        </h2>
      </center>
    </li>
    <li>
      <a href="index.php">Home
      </a>
    </li>
    <li>
      <a href="mail.php">Mail
      </a>
    </li>
    <li>
      <a href="logout.php">Logout
      </a>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse" style="display:block !important;">
    <i class="material-icons" style="color:brown">view_headline
    </i>
  </a>
</nav>
<script type="text/javascript">
  $('.dropdown-button').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: 0, // Spacing from edge
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
  }
                                );
</script>
