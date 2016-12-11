<div class="row">
  <div class="col s12">
    <ul class="tabs">
      <li class="tab col s3">
        <a href="#job" >Search recruits using skills
        </a>
      </li>
      <li class="tab col s3">
        <a class="active" href="#skills">Jobs
        </a>
      </li>
      <li class="tab col s3 ">
        <a href="#cv">Documents
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
          <form name="searchseeker_form" id="searchseeker_form">
            <div class="input-field">
              <input id="search" type="search" placeholder="Search for skills with spaces in between" required>
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
    <form class="col s12" action="addskill.php" method="post" id="job_form">
      <div class="input-field col s12 l10 offset-l1">
        <input id="title" type="text" name="title" class="validate" placeholder="Enter the title" required>
        <label for="title">Title of the job
        </label>
      </div>
      <div class="input-field col s12 l10 offset-l1">
        <textarea id="skills" name="skills" class="materialize-textarea" placeholder="Separate By Commas (,)" required>
        </textarea>
        <label for="skills">Skills Required
        </label>
      </div>
      <div class="input-field col s12 l10 offset-l1">
        <textarea id="synopsis" name="synopsis" class="materialize-textarea" placeholder="Job Description" required>
        </textarea>
        <label for="synopsis">Description
        </label>
      </div>
      <center>
        <button class="btn waves-effect waves-light large red darker-1" id="submit" type="submit" name="action">Add Job
          <i class="material-icons right">add
          </i>
        </button>
        <br>
        <br>
      </center>
    </form>
    <ul class="collection" id="jobcollect">
      <?php
$conn = new mysqli($hostname,$username,$password,$database);
$res=mysqli_query($conn,"select * from `jobs` WHERE `userid`='".$_SESSION['userid']."'");
while($row=mysqli_fetch_array($res))
{
echo '<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">'.$row['title'].'</span><p><b>Skills:</b> '.$row['skills'].' <br><b>Description:</b> '.$row['synopsis'].'</p><a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>';
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
echo '<li class="collection-item"><div>'.$row['name'].'<a href="Users/'.$_SESSION['userid'].'/'.$row['name'].'" class="secondary-content tooltipped" data-tooltip="Download" data-position="top" data-delay="50"><i class="material-icons">play_for_work</i></a> <a href="#" onclick="removeitem(\''.md5(0).'\', \''.md5($row['id']).'\',\''.$row['name'].'\')" class="secondary-content tooltipped" data-tooltip="Remove" data-position="top" data-delay="50"><i class="material-icons">not_interested</i></a></div></li>';
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
    $('#job_form').submit(function(e){
      addjob();
      return false;
    }
                         )
    $('#searchseeker_form').submit(function(e){
      searchseeker();
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
  function addjob()
  {
    var data = new FormData($('#job_form')[0]);
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "addjob.php",
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
        $(".card-content p").html('Your job is added successfuly!');
        $(".preloader-wrapper").hide();
        $("html, body").animate({
          scrollTop: 0 }
                                , "slow");
        $('input').val("");
        $("#jobcollect").append('<li class="collection-item avatar"><i class="material-icons circle">folder</i>'+msg.message+'<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a></li>');
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
  function searchseeker()
  {
    var data = new FormData($('#searchseeker_form')[0]);
    $(".preloader-wrapper").show();
    $.ajax({
      method: "POST",
      url: "searchseekers.php",
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
        $(".card-content p").html('Number of seekers found are:'+msg.count+'!');
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
