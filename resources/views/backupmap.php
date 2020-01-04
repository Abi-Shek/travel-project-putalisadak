<?php 

//map backup


 ?>
 <script type="text/javascript">
    $(document).ready(function (){
//mapping
 var mymap = L.map('mapid').setView([28.417, 84.130], 7);

        // icon
        var myIcon = L.icon({
    iconUrl: '../image/locate.png',
    iconSize: [40, 52],
    iconAnchor:[18, 48],

   
});

        var my = L.divIcon({className: 'check', html: '5'});


        //creating layers for polyline/circle..

    
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 25,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYnBqdWxpMjIiLCJhIjoiY2p6bWJheWR6MTE4NzNtcG04cWkwcXhkYyJ9.QMCt8mdmeslaoW39FN8EPQ'
}).addTo(mymap);




     
                 var places=['Kathmandu'];
var placesLat=['27.7089'];
var placesLng=['85.3202'];


            
        $('#select').change(function(){ 


                // $(".a").css("display","block");
                 $("#desti").css("display","block");

                var val=$("select").val();


            
     $.ajax({
        type: "POST",
        url: "userdashboard",
        data: {course:val, _token: '{{csrf_token()}}'}
    });        


  setInterval(function(){
$("#desti").load('desti');
}, 5000);






      // // mapping
             // //Contents from database
            
 $.get('selgeo',function (hello){
   var geo=jQuery.parseJSON(hello);
 var place=geo.desti;
 var lat=geo.latti;
                var lng=geo.longi;
 places.push(place);
              placesLat.push(lat);
              placesLng.push(lng);


 


                

                 

 var placesLength=placesLat.length;


             // for red polyline

lastline=[
[placesLat[0], placesLng[0]],
    [placesLat[placesLength-1], placesLng[placesLength-1]]
];


// marker.bindTooltip("my tooltip text").openTooltip();

var i=0;
var j=0;
// var latlngs=[];
    for(i=0;i<=placesLength;i++){
var my = L.divIcon({className: 'check', html: i});
        var j=i+1;
        // L.marker([placesLat[i], placesLng[i]], {icon: myIcon}).addTo(mymap);
      L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:myIcon}).addTo(mymap);
       L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:my}).addTo(mymap);


        if(placesLng[i]>placesLng[0] || placesLng[j]>placesLng[0])
        {
            latlngs=[
            [placesLat[0], placesLng[0]],
    [placesLat[placesLength-1], placesLng[placesLength-1]]
    ];

var polyline = L.polyline([latlngs,lastline], {color: 'red'}).addTo(mymap);
        }
        else{
            
latlngs=[
    [placesLat[i], placesLng[i]],
    [placesLat[j], placesLng[j]]
   
    ];

var polyline = L.polyline([latlngs], {color:'blue',title:i}).addTo(mymap);


        }


        }

         


});



$(document).on('click','.delete',function (){

//if delete is clicked

     var itemid=$(this).data('id');
                                $clicked=$(this);
                                $.ajax({
                                      url: 'delete',
                                      type: 'GET',
                                      data: {
                                        'delete': 1,
                                        'id': itemid,
                                      },
                                      success: function(response){
                                        // remove the deleted comment
                                        // $clicked.parent().remove();
                                        $('#del').remove();
                                        // $('#mapid').load('selgeo');

                              
   
 //   var marker= L.marker([placesLat[0], placesLng[0]]);


 // mymap.removeLayer(marker);


 //  mymap.removeControl(marker); 



      




                                        
                               

                                    }

                                });








                                });




// }
// else{

// }

         

       

                // places.push(place);
                // placesLat.push(lat);
                // placesLng.push(lng);



                                                                                                                                        
             } );
      




       









    //sending data to php file to insert in db(here from ajaxcontroller)
            

        });

            
    

    




    </script>




















     <style type="text/css">
      
      .leaflet-cluster-anim .leaflet-marker-icon, .leaflet-cluster-anim .leaflet-marker-shadow {
  -webkit-transition: -webkit-transform 0.3s ease-out, opacity 0.3s ease-in;
  -moz-transition: -moz-transform 0.3s ease-out, opacity 0.3s ease-in;
  -o-transition: -o-transform 0.3s ease-out, opacity 0.3s ease-in;
  transition: transform 0.3s ease-out, opacity 0.3s ease-in;
}

.leaflet-cluster-spider-leg {
  /* stroke-dashoffset (duration and function) should match with leaflet-marker-icon transform in order to track it exactly */
  -webkit-transition: -webkit-stroke-dashoffset 0.3s ease-out, -webkit-stroke-opacity 0.3s ease-in;
  -moz-transition: -moz-stroke-dashoffset 0.3s ease-out, -moz-stroke-opacity 0.3s ease-in;
  -o-transition: -o-stroke-dashoffset 0.3s ease-out, -o-stroke-opacity 0.3s ease-in;
  transition: stroke-dashoffset 0.3s ease-out, stroke-opacity 0.3s ease-in;
}

    </style>

    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster-src.js"></script>

         <script type="text/javascript">
    $(document).ready(function (){
//mapping
 var mymap = L.map('mapid').setView([28.417, 84.130], 7);

        // icon
        var myIcon = L.icon({
    iconUrl: '../image/locate.png',
    iconSize: [40, 52],
    iconAnchor:[18, 48],

   
});

        var my = L.divIcon({className: 'check', html: '5'});


        //creating layers for polyline/circle..

    
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 25,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYnBqdWxpMjIiLCJhIjoiY2p6bWJheWR6MTE4NzNtcG04cWkwcXhkYyJ9.QMCt8mdmeslaoW39FN8EPQ'
}).addTo(mymap);




     
                 var places=['Kathmandu'];
var placesLat=['27.7089'];
var placesLng=['85.3202'];


  var gmark1=new L.markerClusterGroup();
        var gmark2=new L.markerClusterGroup();
        var gmark3=new L.markerClusterGroup();

        mymap.addLayer(gmark1);
         mymap.addLayer(gmark2);
          mymap.addLayer(gmark3);
            
        $('#select').change(function(){ 


                // $(".a").css("display","block");
                 $("#desti").css("display","block");

                var val=$("select").val();


            
     $.ajax({
        type: "POST",
        url: "userdashboard",
        data: {course:val, _token: '{{csrf_token()}}'}
    });  

          


  setInterval(function(){
$("#desti").load('desti');
}, 5000);
// var markergroup=L.layerGroup[testlayer];


// var markergroup=L.layerGroup().addTo(mymap);

});

      // // mapping
             // //Contents from database

             addmarker=function (){
               $.get('selgeo',function (hello){
   var geo=jQuery.parseJSON(hello);
 var place=geo.desti;
 var lat=geo.latti;
                var lng=geo.longi;
 places.push(place);
              placesLat.push(lat);
              placesLng.push(lng);


 


                

                 

 var placesLength=placesLat.length;


             // for red polyline

lastline=[
[placesLat[0], placesLng[0]],
    [placesLat[placesLength-1], placesLng[placesLength-1]]
];


// marker.bindTooltip("my tooltip text").openTooltip();

var i=0;
var j=0;
var latlngs=new Array();
    for(i=0;i<=placesLength;i++){
var my = L.divIcon({className: 'check', html: i});
        var j=i+1;

      

       var  placesmark=L.marker([placesLat[i], placesLng[i]], {icon: myIcon});
    var markerone=  L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:myIcon});
       var markertwo=L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:my});

       gmark1.addLayer(placesmark);
         gmark2.addLayer(markerone);
           gmark3.addLayer(markertwo);


        if(placesLng[i]>placesLng[0] || placesLng[j]>placesLng[0])
        {
            latlngs=[
            [placesLat[0], placesLng[0]],
    [placesLat[placesLength-1], placesLng[placesLength-1]]
    ];

var polyline = L.polyline([latlngs,lastline], {color: 'red'}).addTo(mymap);
        }
        else{
            
latlngs=[
    [placesLat[i], placesLng[i]],
    [placesLat[j], placesLng[j]]
   
    ];

var polyline = L.polyline([latlngs], {color:'blue',title:i}).addTo(mymap);


        }


        }

         


});

             }

             removemarker= function (){
   // amarker= new L.marker([new placesLat[2], new placesLng[2]]);
   amarker = new L.Marker(new L.LatLng(27.7089,85.3202));
    // var anotherMarker = new L.Marker(new L.LatLng(44.9814, 6.072621));
   
   // places.splice(0,1);
   // placesLat.splice(0,1);
   // placesLng.splice(0,1);
  

   mymap.removeLayer(gmark2);
   // mymap.removeControl(amarker);
         



                
              }




            
            
              
           




$(document).on('click','.delete',function (){

//if delete is clicked

     var itemid=$(this).data('id');
                                $clicked=$(this);
                                $.ajax({
                                      url: 'delete',
                                      type: 'GET',
                                      data: {
                                        'delete': 1,
                                        'id': itemid,
                                      },
                                      success: function(response){
                                        // remove the deleted comment
                                        // $clicked.parent().remove();
                                        $('#del').remove();
                                        // $('#mapid').load('selgeo');

                              

































      




                                        
                               

                                    }

                                });








                                });



                                                                                                                                        
             } );
      




       


// *****Last Map***********






    //sending data to php file to insert in db(here from ajaxcontroller)
            

      
            
    

    




    </script>