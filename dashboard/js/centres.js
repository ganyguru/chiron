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
app.controller("records", function($scope,$http) {
  $scope.orderByField = 'name';
  $scope.reverseSort = false;
	$scope.list = [];

  if(getParameter!=0)
  {
  $http.get("http://localhost/108/pAPIs/centres.php?type="+getParameter)
    .then(function(response) {
      json=response.data;
        //var json=JSON.parse(response);
        //console.log(json);

         for(i=0;i<json.length;i++)
        {
          $scope.list[i]={};
          $scope.list[i].id=json[i].id;
          $scope.list[i].name=json[i].name;
          $scope.list[i]["district"]=json[i].district;
          $scope.list[i]["phone"]=json[i].phone;
          $scope.list[i]["total"]=json[i].total;
          $scope.list[i]["lat"]=json[i].lat;
          $scope.list[i]["long"]=json[i].long;
          $scope.list[i]["on"]=json[i].on;
          $scope.list[i]["handle"]=json[i].handle;
          $scope.list[i]["off"]=json[i].total-json[i].on;
        }
    });
  }

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