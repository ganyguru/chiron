var sock = null;
var wsuri = "ws://4e16c88d.ngrok.io/admin/notif";
var emergency_count=0;
// window.onload = function() {
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

var ga;

var app = angular.module("notification", []);
app.controller("alerts", function($scope,$http) {
  //$scope.parameter=getParameter;
  //alert($scope.parameter);
  typeName=['Medical','Police','Fire'];
  colors=['red','#0F486D','#F97210'];
  $scope.list = {};
  if(getParameter==0)
  $http.get("http://localhost/108/pAPIs/notification.php?user=3")
    .then(function(response) {
      json=response.data;
        //var json=JSON.parse(response);
        //console.log(ga[0].lat);
         for(i=0;i<json.length;i++)
        {
          $scope.list[i]={};
          $scope.list[i]["lat"]=json[i].lat;
          $scope.list[i]["long"]=json[i].long;
          $scope.list[i]["color"]=colors[parseInt(json[i].type)-1];
          $scope.list[i]["type"]=typeName[parseInt(json[i].type)-1];
          $scope.list[i]["name"]=json[i].name;
          $scope.list[i]["phone"]=json[i].phone;
          $scope.list[i]["vehicle"]=json[i].vehicle_no;
          $scope.list[i]["driver"]=json[i].driver;
          $scope.list[i]["time"]=json[i].time;
          $scope.list[i]["etype"]="Kitchen";
        }
    });
  else
  {
    $http.get("http://localhost/108/pAPIs/notification.php?user=3&type="+getParameter)
    .then(function(response) {

      json=response.data;
        //var json=JSON.parse(response);
        //console.log(ga[0].lat);
         for(i=0;i<json.length;i++)
        {
          $scope.list[i]={};
          $scope.list[i]["lat"]=json[i].lat;
          $scope.list[i]["long"]=json[i].long;
          $scope.list[i]["color"]=colors[parseInt(json[i].type)-1];
          $scope.list[i]["type"]=typeName[parseInt(json[i].type)-1];
          $scope.list[i]["name"]=json[i].name;
          $scope.list[i]["phone"]=json[i].phone;
          $scope.list[i]["vehicle"]=json[i].vehicle_no;
          $scope.list[i]["driver"]=json[i].driver;
          $scope.list[i]["time"]=json[i].time;
          $scope.list[i]["etype"]="Kitchen";
        }
        
    });
  }

  
  

  // $scope.list[1]={};
  // $scope.list[1]["lat"]="10.7768805";
  // $scope.list[1]["long"]="78.7931037";
  // $scope.list[1]["color"]="#0F486D";
  // $scope.list[1]["type"]="Police";
  // $scope.list[1]["name"]="Vishnu";
  // $scope.list[1]["phone"]="9999999999";
  // $scope.list[1]["vehicle"]="TN 22 BZ 7345";
  // $scope.list[1]["driver"]="Karsin";
  // $scope.list[1]["etype"]="Kitchen";

});


app.controller("user", function($scope) {
	 // $http.get("welcome.htm")
  //   .then(function(response) {
  //       $scope.myWelcome = response.data;
  //   });
  $scope.showLoader = true;
  $scope.pages=['Notification'];

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