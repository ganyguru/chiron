 var sock = null;
 if(getParameter==1)
 var wsuri = "ws://4e16c88d.ngrok.io/admin/notification";
else
  var wsuri = "ws://4e16c88d.ngrok.io/admin/firepolice";
var emergency_count=0;
var allNotif={};
 window.onload = function() {
            sock = new WebSocket(wsuri);

            sock.onopen = function() {
                console.log("connected to gany kutty" + wsuri);
                 var msg = {Id:2};
                sock.send(JSON.stringify(msg));
            }

            sock.onclose = function(e) {
                console.log("connection closed (" + e.code + ")");
            }

            sock.onmessage = function(e) {

              typeName=['Medical','Police','Fire'];
              ids=[];
              descs=[];
              descs[0]=["Serious Injuries","Cardiac arrests","Stroke","Respiratory","Diabetics","Maternal/Neonatal/Pediatric","Epilepsy","Unconsciousness","Animal bites", "High Fever", "Infections", "Others"];
              descs[1]=["Robbery/Theft/Burglary","Street Fights","Property Conflicts","Self-inflicted injuries/Attempted suicides","Theft","Fighting","Public Nuisance","Missing","Kidnappings", "Traffic Problems", "Forceful actions, riots etc", "Others"];
              descs[2]=["Burns","Fire breakouts","Industrial fire hazards", "Others"];
              
              colors=['red','#0F486D','#F97210'];
               var data=JSON.parse(e.data);
               var k=0;
               var m=0;
               var j=0;


               for(i=0;i<data.length;i++)
               {

                if(getParameter!=1)
                {
                  allNotif[i]={};
                  allNotif[i].eid=data[i].Eid;
                  allNotif[i].elat=data[i].ELat;
                  allNotif[i].elong=data[i].ELong;
                  allNotif[i].ephone=data[i].Phone;
                  allNotif[i].ename=data[i].Name;
                  allNotif[i].etime=data[i].Time;
                  allNotif[i].status=data[i].Status;
                  allNotif[i].type=typeName[parseInt(getParameter,10)-1];
                  allNotif[i].color=colors[parseInt(getParameter)-1];         
                  
                  allNotif[i].desc=descs[parseInt(getParameter,10)-1][parseInt(data[i].Description,10)];
                  var appElement = document.querySelector('[ng-controller=alerts]');
                  var $scope = angular.element(appElement).scope();
                  $scope.$apply(function() {
                    $scope.list = allNotif;
                  });
                  var postdata;
                  if(ids.length!=0)
                  postdata={"Id":ids};
                  else
                  postdata={"Id":[1]};

                  $.post("http://4e16c88d.ngrok.io/admin/seen", JSON.stringify(postdata), function(result){
               
                  });
                  continue;
                }


                if(i==0 || allNotif[j].eid!=data[i].Eid)
                {
                  ids[m]=parseInt(data[i].Eid,10);
                  m++;
                  allNotif[i]={};
                  allNotif[i].eid=data[i].Eid;

                  allNotif[i].elat=data[i].ELat;
                  allNotif[i].elong=data[i].ELong;
                  allNotif[i].ephone=data[i].Phone_1;
                  allNotif[i].ename=data[i].Name_1;
                  allNotif[i].etime=data[i].Time;
                  allNotif[i].status=data[i].Status;
                  allNotif[i].etype=data[i].Type;
                  allNotif[i].type=typeName[parseInt(data[i].Type,10)-1];
                  allNotif[i].color=colors[parseInt(data[i].Type)-1];
                  if(data[i].Description!=-1)
                  allNotif[i].desc=descs[parseInt(data[i].Type,10)-1][parseInt(data[i].Description,10)];
                  else
                  allNotif[i].desc="";
                  allNotif[i].vehicle={};
                  allNotif[i].vehicle[k]={};
                   allNotif[i].vehicle[k].vtype="Station";
                  if(allNotif[i].etype=='1')
                    allNotif[i].vehicle[k].vtype="Ambulance";

                  allNotif[i].vehicle[k].vehicle=data[i].Name_2;
                  if(allNotif[i].etype=='1')
                    allNotif[i].vehicle[k].vehicle=data[i].Vehicle_no;

                  allNotif[i].vehicle[k].incharge="Person Incharge";
                  if(allNotif[i].etype=='1')
                    allNotif[i].vehicle[k].incharge="Driver";

                  allNotif[i].vehicle[k].vname=data[i].Name_2;
                  allNotif[i].vehicle[k].vphone=data[i].Phone_2;
                  allNotif[i].vehicle[k].vlat=data[i].VLat;
                  allNotif[i].vehicle[k].vlong=data[i].VLong;
                  allNotif[i].vehicle[k].driver=data[i].Driver;
                  allNotif[i].vehicle[k].vno=data[i].Vehicle_no;
                  allNotif[i].vehicle[k].vid=data[i].Vehicle_id;
                  ++k;
                  j=i;
                }
                else if (allNotif[j].eid==data[i].Eid)
                {
                  allNotif[j].vehicle[k]={};
                  allNotif[j].vehicle[k].vtype="Station";
                  if(allNotif[j].etype=='1')
                    allNotif[j].vehicle[k].vtype="Ambulance";

                  allNotif[j].vehicle[k].vehicle=data[i].Name_2;
                  if(allNotif[j].etype=='1')
                    allNotif[j].vehicle[k].vehicle=data[i].Vehicle_no;

                   allNotif[j].vehicle[k].incharge="Person Incharge";
                  if(allNotif[j].etype=='1')
                    allNotif[j].vehicle[k].incharge="Driver";

                  allNotif[j].vehicle[k].vname=data[i].Name_2;
                  allNotif[j].vehicle[k].vphone=data[i].Phone_2;
                  allNotif[j].vehicle[k].vlat=data[i].VLat;
                  allNotif[j].vehicle[k].vlong=data[i].VLong;
                  allNotif[j].vehicle[k].driver=data[i].Driver;
                  allNotif[j].vehicle[k].vno=data[i].Vehicle_no;
                  allNotif[j].vehicle[k].vid=data[i].Vehicle_id;
                  ++k;
                }
                
               }

            var appElement = document.querySelector('[ng-controller=alerts]');
            var $scope = angular.element(appElement).scope();
            $scope.$apply(function() {
                    $scope.list = allNotif;
            });
            var postdata;
            if(ids.length!=0)
             postdata={"Id":ids};
            else
             postdata={"Id":[1]};

            $.post("http://4e16c88d.ngrok.io/admin/seen", JSON.stringify(postdata), function(result){
               
            });
              console.log(allNotif);
            }
        };

      
           
      


var ga;
function dismissambulance(item)
{
  vid=$(item).parent().data('id');
  eid=$(item).parent().parent().parent().data('id');
  var data={"Vehicle_Id":vid,"Emergency_Id":eid};
  $.post("http://4e16c88d.ngrok.io/admin/dismiss", JSON.stringify(data), function(result){
        $(item).parent().parent().parent().hide();
        console.log(result);
    });
}

var app = angular.module("notification", []);

// app.service('cNotification', function () {
//   this.getNotificationCount = function ($http) {
//         notificationCount=[0,0,0];
//         $http.get("http://localhost/108/pAPIs/notification.php?user=3")
//         .then(function(response) {
//         json=response.data;
        
//         var med=0;
//         var pol=0;
//         var fire=0;
//          for(i=0;i<json.length;i++)
//         {     
//           if(json[i].type=='1')
//           med++;
//           else if(json[i].type=='2')
//           pol++;
//           else if(json[i].type=='3')
//           fire++;    
//           console.log(json[i].type);
//           //notificationCount[parseInt(json[i].type)-1]++;               
//         }
        
//         notificationCount[0]=med;
//         notificationCount[1]=pol;
//         notificationCount[2]=fire;
//         console.log(notificationCount);
//         });
//         return notificationCount;
//     }
// })

// app.controller("cNotification", function($scope,$http,User) {
//   var noMatch =true;
//   $scope.notificationCount=[0,0,0];
//   $scope.list = {};
//   $http.get("http://localhost/108/pAPIs/notification.php?user=3")
//     .then(function(response) {
//       json=response.data;
        
        
//          for(i=0;i<json.length;i++)
//         {
//           for (var index = 0; index < allNotif.length; ++index)
//           {
//         var item = allNotif[index];
//         if(item.id == json[i].id){
//             noMatch = false;
//           break;
//       }}
//         $scope.list[i]={};
//         $scope.list[i]["id"]=json[i].id;
//         $scope.notificationCount[parseInt(json[i].type)-1]++;               
//     }

//     if(noMatch==true)
//     {
//       notifyMe(json.length);
//     }
//         });
//         allNotif=$scope.list;
        
//     $scope.user=User;
//     $scope.user.Medical=$scope.notificationCount[0];
//     $scope.user.Police=$scope.notificationCount[1];
//     $scope.user.Fire=$scope.notificationCount[2];

//     });


app.controller("alerts", function($scope,$http) {
  //$scope.parameter=getParameter;
  //alert($scope.parameter);
  typeName=['Medical','Police','Fire'];
  colors=['red','#0F486D','#F97210'];
  $scope.list = {};
  if(getParameter==1)
  {
  $scope.showothers=false;
  $scope.showmed=true;
}
  else
  {
  $scope.showmed=false;
  $scope.showothers=true;}

  // websocketService.start("ws://4e16c88d.ngrok.io/admin/notification", function (evt) {
  //       data={Id:2};
  //       websocket.send(JSON.stringify)
  //       var obj = JSON.parse(evt.data);
  //       console.log(obj);
  //   });

  // if(getParameter==0)
  // $http.get("http://localhost/108/pAPIs/notification.php")
  //   .then(function(response) {
  //     json=response.data;
  //       //var json=JSON.parse(response);
  //       //console.log(ga[0].lat);
  //        for(i=0;i<json.length;i++)
  //       {
  //         $scope.list[i]={};
  //         $scope.list[i]["lat"]=json[i].lat;
  //         $scope.list[i]["long"]=json[i].long;
  //         $scope.list[i]["color"]=colors[parseInt(json[i].type)-1];
  //         $scope.list[i]["type"]=typeName[parseInt(json[i].type)-1];
  //         $scope.list[i]["name"]=json[i].name;
  //         $scope.list[i]["phone"]=json[i].phone;
  //         $scope.list[i]["vehicle"]=json[i].vehicle_no;
  //         $scope.list[i]["driver"]=json[i].driver;
  //         $scope.list[i]["time"]=json[i].time;
  //         $scope.list[i]["vphone"]=json[i].vphone;
  //         $scope.list[i]["etype"]="Kitchen";
  //         if(json[i].type!='1')
  //         {
  //           $scope.list[i].incharge="Person Incharge";
  //           $scope.list[i].vehtype="Station Name";
  //         }
  //         else
  //         {
  //           $scope.list[i].incharge="Vehicle Driver";
  //           $scope.list[i].vehtype="Vehicle Number";
  //         }
  //       }
  //   });
  // else
  // {
  //   $http.get("http://localhost/108/pAPIs/notification.php?type="+getParameter)
  //   .then(function(response) {

  //     json=response.data;
  //       //var json=JSON.parse(response);
  //       //console.log(ga[0].lat);

  //        for(i=0;i<json.length;i++)
  //       {
          
  //         $scope.list[i]={};
  //         $scope.list[i]["lat"]=json[i].lat;
  //         $scope.list[i]["long"]=json[i].long;
  //         $scope.list[i]["color"]=colors[parseInt(json[i].type)-1];
  //         $scope.list[i]["type"]=typeName[parseInt(json[i].type)-1];
  //         $scope.list[i]["name"]=json[i].name;
  //         $scope.list[i]["phone"]=json[i].phone;
  //         $scope.list[i]["vehicle"]=json[i].vehicle_no;
  //         $scope.list[i]["driver"]=json[i].driver;
  //         $scope.list[i]["time"]=json[i].time;
  //         $scope.list[i]["etype"]="Kitchen";
  //         if(json[i].type!='1')
  //         {
  //           $scope.list[i].incharge="Person Incharge";
  //           $scope.list[i].vehtype="Station Name";
  //         }
  //         else
  //         {
  //           $scope.list[i].incharge="Vehicle Driver";
  //           $scope.list[i].vehtype="Vehicle Number";
  //         }
  //       }
        
  //   });
  // }

  
  

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

app.factory('websocketService', function () {
        return {
            start: function (url, callback) {
                var websocket = new WebSocket(url);
                websocket.onopen = function () {
                };
                websocket.onclose = function () {
                };
                websocket.onmessage = function (evt) {
                    callback(evt);
                };
            }
        }
    }
);
var emerid;
var emerdesc;
var pinged;
function setaccept(item)
{
  // var appElement = document.querySelector('[ng-controller=accept]');
  //        var $scope = angular.element(appElement).scope();
  //        $scope.$apply(function() {
  //          $scope.eid = eid;
  //          });
  emerid=$(item).parent().data('id');
  pinged=item;
  emerdesc=$($(item).parent().parent().children('input[type="text"]')[0]).val();
  
}

function acceptambulance()
{
  var data={"Dispatched":true,"Emergency_Id":parseInt(emerid,10),"User_Id":1,"Updated_Description":emerdesc};
  $.post("http://4e16c88d.ngrok.io/admin/status", JSON.stringify(data), function(result){
        $(pinged).parent().parent().parent().hide();
         $('#acceptModal').modal('toggle');
    });
}

app.controller("accept", function($scope,$http) {
  $scope.eid="";
  $scope.uid="1";
});
app.controller("user", function($scope,$http) {
	 // $http.get("welcome.htm")
  //   .then(function(response) {
  //       $scope.myWelcome = response.data;
  //   });
//     $scope.notificationCount=[0,0,0];
//   $scope.getNotificationCount = function () {
      
//         $http.get("http://localhost/108/pAPIs/notification.php")
//         .then(function(response) {
//         json=response.data;
        
//         var med=0;
//         var pol=0;
//         var fire=0;
//          for(i=0;i<json.length;i++)
//         {     
//           if(json[i].type=='1')
//           med++;
//           else if(json[i].type=='2')
//           pol++;
//           else if(json[i].type=='3')
//           fire++;    
//           //console.log("gol");
//           //console.log(json[i].type);
//           //notificationCount[parseInt(json[i].type,10)-1]++;               
//         }
        
//         $scope.notificationCount[0]=med;
//         $scope.notificationCount[1]=pol;
//         $scope.notificationCount[2]=fire;
//         //console.log(notificationCount);
//         });
// };
  typeName=['Medical','Police','Fire'];
  $scope.showLoader = true;
  if(getParameter!=0)
  $scope.pages=[typeName[getParameter-1],'Notification'];
  else
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