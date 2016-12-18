var sock = null;
var sock2 = null;
var wsuri = "ws://4e16c88d.ngrok.io/admin/emergency";
var emergency_count=0;
var totalcount=0;
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
            	var present=0;
                console.log(JSON.parse(e.data));
                json=JSON.parse(e.data);

                //totalcount=e.data.length;
                for(i=0;i<json.length;i++)
                {
                	if(json[i].Status==true)
                	{
                	placeEmergencyMarkers(emermap,parseFloat(json[i].Lat),parseFloat(json[i].Long));
                	
                		present++;
                	}
                }
                         $(".maplayerw").fadeOut();
                var appElement = document.querySelector('[ng-controller=emergency]');
    			var $scope = angular.element(appElement).scope();
    			$scope.$apply(function() {
        		$scope.tcount = JSON.parse(e.data).length;
        		$scope.present = present;
    				});

       
       //          //console.log("hi");

            }



            sock2=new WebSocket("ws://4e16c88d.ngrok.io/admin/emergencycount");
            sock2.onmessage = function(e) {
            	//var res=JSON.parse(e.data);
            	var count=parseInt(JSON.parse(e.data).Id,10)-37;
            	// notifyMe(count);
            	
            }

        };



        function send() {
            var msg = document.getElementById('message').value;
            sock.send(msg);
        };



var app = angular.module("dashboard", []);
app.controller("emergency", function($scope) {
	$scope.tcount = totalcount;
	$scope.present = 0;
   //$scope.. = 'Raghavendran';
   $scope.getDetails = function() {
        $scope.tcount = "N/A";
    };
});
app.controller("user", function($scope,$http) {
	
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

// var allNotif=[];
// app.controller("cNotification", function($scope,$http) {
// 	var noMatch =true;
//   $scope.notificationCount=[0,0,0];
//   $scope.list = [];
//   $http.get("http://localhost/108/pAPIs/notification.php?user=3")
//     .then(function(response) {
//     	json=response.data;
        
        
//          for(i=0;i<json.length;i++)
//         {
//           for (var index = 0; index < allNotif.length; ++index)
//           {
// 			 	var item = allNotif[index];
// 			 	if(item.id == json[i].id){
//    					noMatch = false;
//    				break;
//  		  }}
//         $scope.list[i]={};
//         $scope.list[i]["id"]=json[i].id;
//         $scope.notificationCount[parseInt(json[i].type)-1]++;         	    
//     }

//     if(noMatch==true)
//     {
//     	notifyMe(json.length);
//     }
//         });
//         allNotif=$scope.list;
        
		

//     });

  


   



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