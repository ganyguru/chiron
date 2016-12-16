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



var app = angular.module("centres", []);
app.controller("alerts", function($scope) {

	$scope.list = {};
  $scope.list[0]={};
  $scope.list[0]["lat"]="10.7768805";
  $scope.list[0]["long"]="78.7931037";
  $scope.list[0]["color"]="#F97210";
  $scope.list[0]["type"]="Fire";
  $scope.list[0]["name"]="Vishnu";
  $scope.list[0]["phone"]="9999999999";
  $scope.list[0]["vehicle"]="TN 22 BZ 7345";
  $scope.list[0]["driver"]="Karsin";
  $scope.list[0]["etype"]="Kitchen";

  $scope.list[1]={};
  $scope.list[1]["lat"]="10.7768805";
  $scope.list[1]["long"]="78.7931037";
  $scope.list[1]["color"]="#0F486D";
  $scope.list[1]["type"]="Police";
  $scope.list[1]["name"]="Vishnu";
  $scope.list[1]["phone"]="9999999999";
  $scope.list[1]["vehicle"]="TN 22 BZ 7345";
  $scope.list[1]["driver"]="Karsin";
  $scope.list[1]["etype"]="Kitchen";

});


app.controller("user", function($scope) {
	 // $http.get("welcome.htm")
  //   .then(function(response) {
  //       $scope.myWelcome = response.data;
  //   });
  typeName=['Medical','Police','Fire'];
  $scope.showLoader = true;
  if(getParameter!=0)
  $scope.pages=[typeName[getParameter-1],'Other Centres'];
  else
  $scope.pages=['Other Centres'];
  
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