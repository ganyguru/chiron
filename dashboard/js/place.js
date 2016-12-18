var sock = null;
var wsuri = "ws://4e16c88d.ngrok.io/admin/notif";
var emergency_count=0;
window.onload = function() {
  $(".bootstrap-select").hide();
      $("select").removeClass("bs-select-hidden");
    }
// console.log("onload");

//             sock = new WebSocket(wsuri);

//             sock.onopen = function() {
//                 console.log("connected to " + wsuri);
//             }

//             sock.onclose = function(e) {
//                 console.log("connection closed (" + e.code + ")");
//             }

//             sock.onmessage = function(e) {

//                 var json = JSON.parse(e.data);
//                 for(i=0;i<json.length;i++)
//                 {
//                 	placeEmergencyMarkers(emermap,parseFloat(json[i].Lat),parseFloat(json[i].Long));
//                 }

//                 var appElement = document.querySelector('[ng-controller=emergency]');
//     			var $scope = angular.element(appElement).scope();
//     			$scope.$apply(function() {
//         		$scope.tcount = i;
//     				});

//                 $(".maplayerw").fadeOut();
//                 //console.log("hi");

//             }
//         };

//         function send() {
//             var msg = document.getElementById('message').value;
//             sock.send(msg);
//         };

function getDesc(item)
{
  //alert($("#cate").val());
  var value=parseInt($("#cate").val(),10);
  var string="";
  var descs = [["Serious Injuries","Cardiac arrests","Stroke","Respiratory","Diabetics","Maternal/Neonatal/Pediatric","Epilepsy","Unconsciousness","Animal bites", "High Fever", "Infections", "Others"],
              ["Robbery/Theft/Burglary","Street Fights","Property Conflicts","Self-inflicted injuries/Attempted suicides","Theft","Fighting","Public Nuisance","Missing","Kidnappings", "Traffic Problems", "Forceful actions, riots etc", "Others"],
             ["Burns","Fire breakouts","Industrial fire hazards", "Others"]];
            console.log(value);
  for(i=0;i<descs[parseInt(value,10)-1].length;i++)
  {
    string+="<option value="+i+">"+descs[parseInt(value,10)-1][i]+"</option>";
  }
  console.log(string);
  $("#desc").html(string);

}

var option1Options = ["Medical", "Police", "Fire"];
var option2Options = [["Serious Injuries","Cardiac arrests","Stroke","Respiratory","Diabetics","Maternal/Neonatal/Pediatric","Epilepsy","Unconsciousness","Animal bites", "High Fever", "Infections", "Others"],
              ["Robbery/Theft/Burglary","Street Fights","Property Conflicts","Self-inflicted injuries/Attempted suicides","Theft","Fighting","Public Nuisance","Missing","Kidnappings", "Traffic Problems", "Forceful actions, riots etc", "Others"],
             ["Burns","Fire breakouts","Industrial fire hazards", "Others"]];


var app = angular.module("addamb", []);


app.controller("aamb", function($scope,$http) {
  
$scope.o="gg";
  if(getParameter!=0)
  {
    $scope.type=getParameter;
  }
    $scope.options=["Medical", "Police", "Fire"];
    $scope.options1 = option1Options;
    $scope.options2 = []; // we'll get these later
    $scope.getOptions2 = function(){
        // just some silly stuff to get the key of what was selected since we are using simple arrays.
        var key = $scope.options1.indexOf($scope.option1);
        // Here you could actually go out and fetch the options for a server.
        var myNewOptions = option2Options[key];
        // Now set the options.
        // If you got the results from a server, this would go in the callback
        $scope.options2 = myNewOptions;
    };

});


app.controller("user", function($scope,$http) {
	 // $http.get("welcome.htm")
  //   .then(function(response) {
  //       $scope.myWelcome = response.data;
  //   });

  $scope.notificationCount=[0,0,0];
  $scope.getNotificationCount = function () {
      
        $http.get("http://localhost/108/pAPIs/notification.php?user=3")
        .then(function(response) {
        json=response.data;
        
        var med=0;
        var pol=0;
        var fire=0;
         for(i=0;i<json.length;i++)
        {     
          if(json[i].type=='1')
          med++;
          else if(json[i].type=='2')
          pol++;
          else if(json[i].type=='3')
          fire++;    
          //console.log("gol");
          //console.log(json[i].type);
          //notificationCount[parseInt(json[i].type,10)-1]++;               
        }
        
        $scope.notificationCount[0]=med;
        $scope.notificationCount[1]=pol;
        $scope.notificationCount[2]=fire;
        //console.log(notificationCount);
        });
};
  typeName=['Medical','Police','Fire'];
  $scope.showLoader = true;
  
  
  $scope.pages=['Place Emergency'];
  
   $scope.firstname = 'Ganesh';
   $scope.lastname = 'Raghavendran';


    $scope.getDetails = function() {
        $scope.firstname = 'Ganesh';
        $scope.lastname = 'Raghavendran';
        $scope.showLoader = false;
    };

     $scope.openPage = function (pageName) {
      window.location = '#/' + pageName;
      window.location.reload();
  };
});

function notifyMe(num) {
	var image="img/108logo.png";
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('!! 108 Emergency !!', {
      icon: image,
      body: "You have "+num+" Emergency Notifications"
    });

    notification.onclick = function () {
      window.open("notifications.php");      
    };

  }

}


var map = {}; // You could also use an array
onkeydown = onkeyup = function(e){
    e = e || event; // to deal with IE
    map[e.keyCode] = e.type == 'keydown';
    if(map[17] && map[16] && map[69]){ // CTRL+SHIFT+E
    window.location.href="place.php";
}
}

function place()
{

  var lat;
  var long;
  $.get("https://maps.googleapis.com/maps/api/geocode/json?address="+$("#address").val()+"&key=AIzaSyCe0cqAYA-S8fBtjkCbbb8-44ui8wF6z7s",function(dat)
  {
    //console.log(JSON.parse(dat));
   // dat=JSON.parse(dat);
    lat=dat.results[0].geometry.location.lat;
    long=dat.results[0].geometry.location.lng;
    var data={"Lat":String(lat),"Long":String(long),"Name":$("#name").val(),"Phone":$("#phone").val(),"Type":parseInt($("#cate").val(),10),"Description":parseInt($("#desc").val(),10),"Number":parseInt($("#injured").val(),10),"Token":"0",};
  console.log(data);
  $.post("https://4e16c88d.ngrok.io/user/emergency",JSON.stringify(data),function(res)
  {
    alert("Emergency Placed");
  })
  });
  
}