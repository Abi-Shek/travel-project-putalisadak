 <!-- <meta name="csrf-token" content="{{ csrf_token() }}" > -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
    	.check{
      background: black;
      /*display: block;
*/      border-radius: 50%;

      color:white;
      text-align:center;
      font-size: 9px;

      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      content:'\f041';
      position: absolute;
      padding: 1px;
      top:-20px;
      left:-2px;

     }
    </style>

@include("layout.header")

</head>

<body>





    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 100px" style="background-color:silver">
@include("layout.navbar")
  <hr style="opacity: .4;margin: 0;">
    </div>



<!-- end of navbar -->

<div  class="uk-clearfix"></div>
<div class="uk-container">
	<div class="uk-section">
	<div class="uk-grid">
		<div class="uk-width-2-3 uk-card uk-card-default uk-card-large uk-padding-large" style="height: auto !important;">
			<div class="">
			<h2>Booking Details</h2>
			<table class="uk-table uk-table-striped">
				<tr>
					<th>Destinations</th><td>@foreach($destination as $sel)
						{{$sel -> destination}}
					@endforeach</td>
				</tr>
				<tr>
					<th>Total Duration</th><td>{{$totaldays}} days</td>
				</tr>
				<tr>
					<th>Total Cost</th><td>${{$totalcost}}</td>
				</tr>
				<tr>
					<th>Adventures</th><td>{{$advents}}</td>
				</tr>
				<tr>
					<th></th><td><a href="" class="btn-global uk-button">Email Us</a><a href="" class="btn-global uk-button">Follow us</a></td>
				</tr>
			</table>
		</div>
		</div>
		<div class="uk-width-1-3" style="height: ;">
			<h2>Destinations in Image</h2>
			<?php $folder='image/destination/'; ?>
			@foreach($images as $image)
			<img src="image/destination/{{$image -> feat}}" uk-image height="200px" width="100%">
			@endforeach

		</div>
	</div>
</div>
</div>
<div class="uk-container">
	<div class="uk-section">
	<div class="uk-grid">
		<div class="uk-width-1-1">
			<div id="mapid" style="width:100%;height: 600px;">hello</div>
		</div>
	</div>
	</div>
</div>
<script type="text/javascript">
  		var mymap = L.map('mapid').setView([28.417, 84.130], 7);

  		// icon
  		var myIcon = L.icon({
    iconUrl: '../image/locate.png',
    iconSize: [28, 28],
    iconAnchor:[15, 28],


});
 //icon2
  var my = L.divIcon({className: 'check', html: '5'});




  		//creating layers for polyline/circle..


  		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 25,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1IjoiYnBqdWxpMjIiLCJhIjoiY2p6bWJheWR6MTE4NzNtcG04cWkwcXhkYyJ9.QMCt8mdmeslaoW39FN8EPQ'
}).addTo(mymap);


//Contents from database

$.get('destcreatedb',function (hello){
var go=jQuery.parseJSON(hello);

	var places=go.desti;
	var placesLat=go.latti;
	var placesLng=go.longi;

	// var places=<?php //echo json_encode($myplace); ?>;
	// 	var placesLat=<?php //echo json_encode($mylat); ?>;
	// 		var placesLng=<?php //echo json_encode($mylong); ?>;


// var places=['Kathmandu'];
// var placesLat=['27.7089'];
// var placesLng=['85.3202'];


var placesLength=placesLat.length;

// for polyline

// lastline=[
// [placesLat[0], placesLng[0]],
// 	[placesLat[4], placesLng[4]]
// ];

var my = L.divIcon({className: 'check', html: '5'});
// marker.bindTooltip("my tooltip text").openTooltip();

var i=0;
var j=0;
// var latlngs=[];
	for(i=0;i<=placesLength;i++){
var my = L.divIcon({className: 'check', html: i});
		var j=i+1;
  		// L.marker([placesLat[i], placesLng[i]], {icon: myIcon}).addTo(mymap);
      var marka=L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:myIcon});
       var markb=L.marker([placesLat[i], placesLng[i]], {title:places[i],icon:my});
       mymap.addLayer(marka);
       mymap.addLayer(markb);


// 		if(placesLng[i]>placesLng[0] || placesLng[j]>placesLng[0])
// 		{
// 			latlngs=[
// 			[placesLat[0], placesLng[0]],
// 	[placesLat[4], placesLng[4]]


// 	];

// var polyline = L.polyline([latlngs,lastline], {color: 'red'}).addTo(mymap);
// 		}
// 		else{

latlngs=[
	[placesLat[i], placesLng[i]],
	[placesLat[j], placesLng[j]]

	];

var polyline = L.polyline([latlngs], {color:'rgb(12, 147, 209)',title:i,weight:2});


// // 		}
// var polyline = L.polyline([latlngs,lastline], {color: 'red'});
mymap.addLayer(polyline)

		}
});

  	</script>
@include('layout.footer')
