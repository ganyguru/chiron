<div class="row">
  <div class="col s12 l8 offset-l2">
    <center>
      <?php
include '../config.php';
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
$userid=$id;
$query="SELECT * FROM recruiters WHERE userid='".$userid."'";
$name="";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
echo "<h2 class='title'>".$row['name']."</h2>";
$name=$row['name'];
echo "<h4>Recruiter</h4>";
echo "<p><b>Mobile Number:</b>".$row['mobile'];
echo "<br><b>Email:</b>".$row['email']."</p><h3>Openings Available</h3>";
}
$query="SELECT * FROM jobs WHERE userid='".$userid."'";
$res=mysqli_query($conn,$query);
echo '</center><ul class="collection" id="jobcollect">';
while($row=mysqli_fetch_array($res))
{
echo '<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">'.$row['title'].'</span><p><b>Skills:</b> '.$row['skills'].' <br><b>Description:</b> '.$row['synopsis'].'<br><a href="#message" class="modal-trigger">Message him/her</a></p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';
}
echo '</ul>';
?>
      </div>    
  </div>
  <div id="message" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Send message to 
        <?php echo $name; ?>
      </h4>
      <p>
        <select id="file" style="display:block">
          <option value="" disabled selected>Choose a file to attach link
          </option>
          <?php
$query="SELECT * FROM documents WHERE userid='".$userid."'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res))
{
echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
}
?>
        </select>
      <form id="msg_form" name="msg_form" method="post" action="message.php">
        <input type="hidden" id="toid" name="toid" value="<?php echo $userid; ?>">
        <div class="input-field col s12 l10 offset-l1">
          <textarea id="msg" name="msg" class="materialize-textarea" placeholder="HTML Message :)" required>
          </textarea>
          <label for="msg">Message to be sent
          </label>
        </div>
        <button class="btn waves-effect waves-light large red darker-1" id="submit" type="submit" name="action">Send
          <i class="material-icons right">send
          </i>
        </button>
      </form>
      </p>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
    $("#file").change(function () {
      var getUrl = window.location;
      var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
      $("#msg").val($("#msg").val()+"\n"+baseUrl+'/'+$("#file").val());
    }
                     );
  }
                   );
  $(document).ready(function(){
    $('.modal-trigger').leanModal();
    $('#document_form').submit(function(e){
      adddocument();
      return false;
    }
                              )
    $('#skill_form').submit(function(e){
      addskill();
      return false;
    }
                           )
    $('#searchjob_form').submit(function(e){
      searchjobs();
      return false;
    }
                               )
    $('#msg_form').submit(function(e){
      sendmessage();
      return false;
    }
                         )
  }
                   )
  function adddocument()
  {
    var data = new FormData($('#document_form')[0]);
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "adddocument.php",
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
        $(".card-title").html('Sucessfully added!');
        $(".card-content p").html('Your file is added successfuly!');
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
        $(".card-title").html('Failed to Add!');
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
      $(".card-title").html('Failed to Add!');
      $(".card-content p").html('Unable to Add. Please Contact Breadume for any issues');
      $(".preloader-wrapper").hide();
      $("html, body").animate({
        scrollTop: 0 }
                              , "slow");
      $('input').val("");
    }
                      )
  }
  function addskill()
  {
    var data = new FormData($('#skill_form')[0]);
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "addskill.php",
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
        $(".card-title").html('Sucessfully added!');
        $(".card-content p").html('Your skill is added successfuly!');
        $(".preloader-wrapper").hide();
        $("html, body").animate({
          scrollTop: 0 }
                                , "slow");
        $('input').val("");
        $("#skillheader").append('<li class="collection-item"><div>'+msg.message+'<a href="#!" class="secondary-content tooltipped" data-tooltip="Remove" data-position="top" data-delay="50"><i class="material-icons">not_interested</i></a></div></li>');
      }
      else
      {
        $("#card").show();
        $(".card").removeClass('red');
        $(".card").removeClass('green');
        $(".card").addClass('red');
        $(".card-title").html('Failed to Add!');
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
      $(".card-title").html('Failed to Add!');
      $(".card-content p").html('Unable to Add. Please Contact Breadume for any issues');
      $(".preloader-wrapper").hide();
      $("html, body").animate({
        scrollTop: 0 }
                              , "slow");
      $('input').val("");
    }
                      )
  }
  function searchjobs()
  {
    var data = new FormData($('#searchjob_form')[0]);
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "searchjobs.php",
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
        $(".card-title").html('Sucessfully found results!');
        $(".card-content p").html('Number of jobs found are:'+msg.count+'!');
        $(".preloader-wrapper").hide();
        $("html, body").animate({
          scrollTop: 0 }
                                , "slow");
        $('input').val("");
        $("#jobcollect").append(msg.message);
      }
      else
      {
        $("#card").show();
        $(".card").removeClass('red');
        $(".card").removeClass('green');
        $(".card").addClass('red');
        $(".card-title").html('Failed to Search!');
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
      $(".card-title").html('Failed to Add!');
      $(".card-content p").html('Unable to Add. Please Contact Breadume for any issues');
      $(".preloader-wrapper").hide();
      $("html, body").animate({
        scrollTop: 0 }
                              , "slow");
      $('input').val("");
    }
                      )
  }
  function sendmessage()
  {
    var data = new FormData($('#msg_form')[0]);
    Materialize.toast('Sending Message!', 4000)
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "message.php",
      contentType: false,
      processData:false,
      dataType:'json',
      data:data
    }
          ).done(function(msg){
      if(msg.status_code==200)
      {
        Materialize.toast('Sent!', 4000);
      }
      else
      {
        Materialize.toast('Not Sent!', 4000);
      }
    }
                ).fail(function(){
      Materialize.toast('Not Sent!', 4000);
    }
                      )
  }
</script>
