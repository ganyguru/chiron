var sock = null;
var wsuri = "ws://4e16c88d.ngrok.io/admin/notif";
var emergency_count=0;
window.onload = function() {
console.log("onload");

            sock = new WebSocket(wsuri);

            sock.onopen = function() {
                console.log("connected to " + wsuri);
            }

            sock.onclose = function(e) {
                console.log("connection closed (" + e.code + ")");
            }

            sock.onmessage = function(e) {

                var json = JSON.parse(e.data);
                for(i=0;i<json.length;i++)
                {
                	placeEmergencyMarkers(emermap,parseFloat(json[i].Lat),parseFloat(json[i].Long));
                }

                var appElement = document.querySelector('[ng-controller=emergency]');
    			var $scope = angular.element(appElement).scope();
    			$scope.$apply(function() {
        		$scope.tcount = i;
    				});

                $(".maplayerw").fadeOut();
                //console.log("hi");

            }
        };

        function send() {
            var msg = document.getElementById('message').value;
            sock.send(msg);
        };



var app = angular.module("dashboard", []);
app.controller("emergency", function($scope) {
	$scope.tcount = "N/A";
   //$scope.. = 'Raghavendran';
   $scope.getDetails = function() {
        $scope.tcount = "N/A";
    };
});
app.controller("user", function($scope) {
	 // $http.get("welcome.htm")
  //   .then(function(response) {
  //       $scope.myWelcome = response.data;
  //   });
  $scope.showLoader = true;
  $scope.pages=['Dashboard'];
  
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

function placeEmergencyMarkers(map,lat,long)
{
	var image="img/plus.png";
	var myLatLng = {lat: lat, lng: long};
	var marker = new google.maps.Marker({
    position: myLatLng,
    icon:image,
    map: map,
    title: 'Name'
  });
}

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