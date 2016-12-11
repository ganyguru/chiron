<div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3">
        <a href="#job" >Search Jobs
        </a>
      </li>
      <li class="tab col s3">
        <a class="active" href="#skills">Skills
        </a>
      </li>
      <li class="tab col s3 ">
        <a href="#cv">Resume/Documents
        </a>
      </li>
    </ul>
  </div>
  <div id="job" class="col s12">
    <br>
    <br>
    <center>
      <nav class="brown" style="width:80%">
        <div class="nav-wrapper">
          <form action="searchjobs.php" method="post" id="searchjob_form">
            <div class="input-field">
              <input id="search" type="search" name="search" placeholder="Search for jobs here" required>
              <label for="search">
                <i class="material-icons">search
                </i>
              </label>
              <i class="material-icons">close
              </i>
            </div>
          </form>
        </div>
      </nav>
    </center>
    <ul class="collection" id="jobcollect">
    </ul>
  </div>
  <div id="skills" class="col s12 l10 offset-l1">
    <br>
    <br>
    <form class="col s12" action="addskill.php" method="post" id="skill_form">
      <div class="input-field col s12 l10 offset-l1">
        <input id="skill" type="text" name="skill" class="validate" placeholder="Enter a skill" required>
        <label for="skill">Your Skill
        </label>
      </div>
      <center>
        <button class="btn waves-effect waves-light large red darker-1" id="submit" type="submit" name="action">Add Skill
          <i class="material-icons right">add
          </i>
        </button>
        <br>
        <br>
      </center>
    </form>
    <ul class="collection with-header" id="skillheader">
      <li class="collection-header">
        <h4>Skill Set
        </h4>
      </li>
      <?php
$conn = new mysqli($hostname,$username,$password,$database);
$res=mysqli_query($conn,"select * from `skills` WHERE `userid`='".$_SESSION['userid']."'");
while($row=mysqli_fetch_array($res))
{
echo '<li class="collection-item"><div>'.$row['skill'].'</div></li>';
}
?>
    </ul>
    <br>
    <br>
  </div>
  <div id="cv" class="col s12 l10 offset-l1">
    <br>
    <br>
    <center>
      <form class="col s12" action="adddocument.php" enctype="multipart/form-data" method="post" id="document_form">
        <div class="file-field input-field">
          <div class="btn red">
            <span>Upload Document
            </span>
            <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <button class="btn waves-effect waves-light large red darker-1" id="submit" type="submit" name="action">Add Document
          <i class="material-icons right">add
          </i>
        </button>
        <br>
      </form>
      <br>
      <br>
    </center>
    <ul class="collection with-header" id="docs">
      <li class="collection-header">
        <h4>Present Documents
        </h4>
      </li>
      <?php
$conn = new mysqli($hostname,$username,$password,$database);
$res=mysqli_query($conn,"select * from `documents` WHERE `userid`='".$_SESSION['userid']."'");
while($row=mysqli_fetch_array($res))
{
echo '<li class="collection-item"><div>'.$row['name'].'<a href="Users/'.$_SESSION['userid'].'/'.$row['name'].'" class="secondary-content tooltipped" data-tooltip="Download" data-position="top" data-delay="50"><i class="material-icons">play_for_work</i></a> <a href="#!" onclick="removeitem(\''.md5(0).'\', \''.md5($row['id']).'\',\''.$row['name'].'\')" class="secondary-content tooltipped" data-tooltip="Remove" data-position="top" data-delay="50"><i class="material-icons">not_interested</i></a></div></li>';
}
?>
    </ul>
    <br>
    <br>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('ul.tabs').tabs();
  }
                   );
  $(document).ready(function(){
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
        $("#docs").append(msg.message);
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
        $("#skillheader").append('<li class="collection-item"><div>'+msg.message+'</div></li>');
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
  function removeitem(item,value,name)
  {
    if (confirm('Do you want to delete the document?')) {
      $.post("remove.php", {
        item: item,value:value,name:name}
             , function(result){
        location.reload();
      }
            );
    }
    else {
      alert('Thanks for reconsidering!');
    }
  }
</script>
