<!DOCTYPE html>
<html>
<head>
	<title>My  Map</title>
	 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
  
   <link rel="stylesheet" type="text/css" href="../css/all.css">
   <link rel="stylesheet" type="text/css" href="webfonts/">

    <style type="text/css">
     .check{
      background: black;
      /*display: block;
*/      border-radius: 50%;
    
      color:white;
      text-align:center;
      font-size: 12px;
      
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      content:'\f041';
      position: absolute;
      padding: 4px 4px;
      top:-38px;
      left:-2px;

     }
   </style>
</head>
<body>
<h2 align="center">Mapping and Locator</h2>

<!-- 
LeafLet Map api -->
 <style type="text/css">
 	#mapid { height: 520px;width: 100%; }
 </style>
  <div id="mapid">
  </div>



  	<script type="text/javascript">
  		var mymap = L.map('mapid').setView([28.417, 84.130], 8);

  		// icon
  		var myIcon = L.icon({
    iconUrl: '../image/locate.png',
    iconSize: [40, 52],
    iconAnchor:[18, 48],

   
});





  		//creating layers for polyline/circle..

  	
  		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 25,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1IjoiYnBqdWxpMjIiLCJhIjoiY2p6bWJheWR6MTE4NzNtcG04cWkwcXhkYyJ9.QMCt8mdmeslaoW39FN8EPQ'
}).addTo(mymap);


//Contents from database

var places=['Kathmandu','Chitwan', 'Pokhara', 'Annapurna Base Camp', 'Everest Base Camp'];
var placesLat=['27.7089','27.6188', '28.2097', '28.5308', '28.00424'];
var placesLng=['85.3202','84.3579', '83.9914', '83.8807', '86.85715'];
var placesLength=placesLat.length;

// for polyline

lastline=[
[placesLat[0], placesLng[0]],
	[placesLat[4], placesLng[4]]
];

var my = L.divIcon({className: 'check', html: '5'});
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
	[placesLat[4], placesLng[4]]
	
	// [placesLat[], placesLng[i]]
	];

var polyline = L.polyline([latlngs,lastline], {color: 'red'}).addTo(mymap);
		}
		else{
			
latlngs=[
	[placesLat[i], placesLng[i]],
	[placesLat[j], placesLng[j]]
	// [placesLat[], placesLng[i]]
	];

var polyline = L.polyline([latlngs], {color:'blue',title:i}).addTo(mymap);


		}


		}

// latlngs=[
// 	[placesLat[i], placesLng[i]],
// 	[placesLat[j], placesLng[j]]
// 	// [placesLat[], placesLng[i]]
// 	];

// var polyline = L.polyline([latlngs,lastline], {color: 'blue'}).addTo(mymap);

 		
  

// var polyline = L.polyline(lastline, {color: 'red'}).addTo(mymap);


//locations lat:long [27.7089, 85.3202],
    // [27.6188, 84.3579],
    // [28.2097, 83.9914]

  	</script>
 


              



</body>
</html>