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



var app = angular.module("ambulances", []);
app.controller("records", function($scope,$http) {
  $scope.orderByField = 'driver';
  $scope.reverseSort = false;
	$scope.list = [];
  $scope.h1="Station Name";
  $scope.h2="Person Incharge";
  if(getParameter==1)
  {
    $scope.h1="Vehicle No.";
  $scope.h2="Vehicle Driver";
  }
  if(getParameter!=0)
  {
  $http.get("http://localhost/108/pAPIs/ambulances.php?type="+getParameter)
    .then(function(response) {
      json=response.data;
      icons=['img/ambulance.png','img/police.png','img/fire.png'];
        //var json=JSON.parse(response);
        //console.log(json);

         for(i=0;i<json.length;i++)
        {
          $scope.list[i]={};
          $scope.list[i].id=json[i].id;          
          $scope.list[i]["driver"]=json[i].driver;
          $scope.list[i]["vehicle_no"]=json[i].vehicle_no;
          $scope.list[i]["phone"]=json[i].phone;
          $scope.list[i]["lat"]=json[i].lat;
          $scope.list[i]["long"]=json[i].long;
          $scope.list[i]["status"]=json[i].status;
          $scope.list[i]["handle"]=json[i].handle;
          placeEmergencyMarkers(ambmap,parseFloat(json[i].lat),parseFloat(json[i].long),icons[parseInt(json[i].type,10)-1],json[i].id,json[i].vehicle_no,json[i].driver,json[i].phone,getParameter);
          console.log(json[i].type);
        }
        $(".maplayerw").fadeOut();
    });
  }

    
});


function editclick(a)
    {
      // alert($(a).parent().parent());
      dataid=$(a).parent().parent().children('td');
          
          //console.log( event.target);
          var appElement = document.querySelector('[ng-controller=editamb]');
          var $scope = angular.element(appElement).scope();
          $scope.$apply(function() {
            $scope.id = $(dataid[0]).data('id');
            $scope.vehicle = $(dataid[1]).data('id');
            $scope.driver = $(dataid[2]).data('id');
            $scope.phone = $(dataid[3]).data('id');
            });
    }


function notifyclick(a)
    {
      // alert($(a).parent().parent());
      dataid=$(a).parent().parent().children('td');
          
          //console.log( event.target);
          var appElement = document.querySelector('[ng-controller=notifyamb]');
          var $scope = angular.element(appElement).scope();
          $scope.$apply(function() {
            $scope.id = $(dataid[0]).data('id');
            
            });
    }

app.controller("editamb", function($scope,$http) {
  $scope.vehicle="N/A";
  $scope.driver="N/A"
  $scope.phone = "N/A";
  $scope.id="N/A";

});

app.controller("notifyamb", function($scope,$http) {
  
  $scope.id="N/A";

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
  $scope.pages=[typeName[getParameter-1],'Ambulance Monitor','View Status'];
  else
  $scope.pages=['Ambulance Monitor','View Status'];
  
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

function placeEmergencyMarkers(map,lat,long,image,id,vno,driver,phone,type)
{
  //var image="img/plus.png";
  var myLatLng = {lat: lat, lng: long};
  var heading="Station #";
  var h1="Station Name";
  var h2="Incharge";
  var ptitle="Station #"+id;
  if(type==1)
  {
    heading="Ambulance #";
    h1="Vehicle No";
    h2="Driver";
    ptitle="Ambulance #"+id;
  }
  var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h3 id="firstHeading" class="firstHeading">'+heading+id+'</h3>'+
            '<div id="bodyContent">'+
            '<p><b>'+h1+' : </b>'+vno+'<br> ' +
            '<b>'+h2+' : </b>'+driver+'<br> '+
            '<b>Phone No : </b>'+phone+'<br> '+            
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
  var marker = new google.maps.Marker({
    position: myLatLng,
    icon:image,
    map: map,
    title: ptitle
  });
  marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
}



    // $('#EditModal').modal({
    //     keyboard: true,
    //     backdrop: "static",
    //     show:false,
        
    // }).on('shown.bs.modal', function(event){
    //       //alert('hi');
    //       var getIdFromRow = $(event.target).closest('tr');
    //       dataid=getIdFromRow.children('td');
          
    //       //console.log( event.target);
    //       var appElement = document.querySelector('[ng-controller=editamb]');
    //       var $scope = angular.element(appElement).scope();
    //       $scope.$apply(function() {
    //         $scope.vehicle = $(dataid[1]).data('id');
    //         $scope.driver = $(dataid[2]).data('id');
    //         $scope.phone = $(dataid[3]).data('id');
    //         });
          
    //     //make your ajax call populate items or what even you need
        
    // });
