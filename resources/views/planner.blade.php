
 <!-- <meta name="csrf-token" content="{{ csrf_token() }}" > -->
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





</head>
<body bgcolor="whitesmoke">
@include('layout.header')

<div style="background: rgb(12, 147, 209)">
	@include('layout.navbar')
</div>
<div class="uk-container">
	<div class="uk-grid" id="plannedDestination">
		<div class="uk-width-2-3@m uk-margin-medium-top">
			<h2>Book your tour</h2>
			<p><button class="uk-button btn-global">Special</button>
			<button class="uk-button btn-global">Luxury</button></p>
			<?php $id=1; ?>
			@foreach($destination as $sel)
			<div style="min-width:100% ;float: left;">
			<div class="uk-float-left">
			<span class="uk-badge">{{$id}}</span>
			<hr class="my-divider-vertical">
			</div>
			<div class="uk-float-left mid" >
				<hr class="my-divider-small">

			</div>
		<!-- 	<div class="uk-float-left">

				<button class="uk-button uk-button-default btn-global ">{{ $sel -> destination}}</button>

			</div>
		-->
			<div style="/*clip-path: polygon(55% 10%, 100% 10%, 100% 100%, 0 100%, 0 10%, 45% 10%, 50% 0);*/height: auto;background:  whitesmoke;margin-top: 80px;margin-left: 1%;border:2px solid rgb(12, 147, 209);border-bottom-width: ;border-radius: 10%" class="uk-float-left uk-text-center uk-width-1-1 planclip">
				<h5 class="uk-text-center" style="background-color:rgb(12, 147, 209) ;color: white;padding:5px 0;border-radius: ;margin-top: 5px;width:calc(100% - 8%);margin-left:4%;margin-right:4%;border-radius: 5px;">{{$sel -> destination}}</h5>
				<div class="shortcut uk-text-center">
					<span><b id="mydays">{{ $sel -> duration}}</b> <b id="mydayss"></b> days</span>

				<span style="height: 50px;width:5px;background-color: silver;margin: -10px 10px;clear: both;display: inline-flex;"></span>

					<span> <sup style="font-size: 18px;top: -30px;">$</sup><b>{{ $sel -> totalcost}} </b></span>
				</div>
				<div>
					<a href="">View Itinerary</a>
				</div>
				<div>
					<p><b>Can do:</b> {{ $sel -> adventure}}</p>
				</div>
				<div class="dshow">
					<a href="detail?post_name={{$sel -> destination}}" target="_blank"><button class="btn-global uk-button-small" style="border-radius: unset;border:0;"> Detail</button></a>
				<button class="btn-global uk-button-small" style="border-radius: unset;border:0;" type="button" disabled>Add Day</button>
				<input type="text" name="dname" hidden value="{{ $day= $sel -> destination}}">
				<select name="optday" class="days">
					{{ $day= $sel -> duration}}
					<?php
					for($i=$day;$i<=$day+7;$i++)
					{
						?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></opti+on>

						<?php


					}
					?>


				</select>


				<script>
					//$("#m+ydayss").hide();
					$(document).on('change','.days',function(ele){
						ele.stopPropagation();
						ele.stopImmediatePropagation();
						var days=$(this).val();
						var vals=$(this).closest('.dshow').find("input[name='dname']").val();
						//var span=$(this).closest('.dshow').find("#dayss").html();

						//var location='planner';

					$.ajax({
						url:'dayadd',
						type:'GET',
						data:{
							'update':1,
							'name':vals,
							'days':days,
						},
						success:function(){
							alert("The duration added to " + vals + " is" + days +  " days");
							//$("#mydays").hide();
							location.reload();


						;

						}

					});
				});


				</script>

    .
				</div>


			</div>
		</div> <!-- margin class -->
		<?php $id=$id+1; ?>
			@endforeach
			<?php  ?>
		</div>
		<div class="uk-width-1-3@m uk-text-center maplocate" style="position:fixed ;right: 40px;">

<h3 align="center">Mapping and Locator</h3>

<!--
LeafLet Map api -->
 <style type="text/css">
 	#mapid { height: 300px;width: 100%; }
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
  <div id="mapid">
  </div>
  <div>
  	<h3 class="uk-margin-remove ">Add More</h3>
  	<div class=" uk-text-center myadd">
  		<p class="uk-light" style="padding-top: 50px;"><!-- This is a button toggling the modal with the default close button -->
<button uk-toggle="target: #modal-close-default"  uk-tooltip="<b>Add more destination to have lot of fun! </b>" >Destination</button>  <button uk-toggle="target: #modal-example" uk-tooltip="<b>Add adventure in your travel </b>">Adventure</button>
</p>
  		<p><a href="statusbooked"><button class="uk-button-default uk-button btn-global hidebtn" style="border-radius: unset;" >Confirm Booking</button></a></p>

  </div>



  	<script type="text/javascript">
  		var mymap = L.map('mapid').setView([28.417, 84.130], 6);

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

$.get('destcreated',function (hello){
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



		</div>
	</div>
	<div class="" style="position: fixed;left:10px;bottom:0px;height: ;width:auto;background: #3c3c3d;" id="billoverview">
		<h6 class="uk-text-left uk-text-bold" style="color:rgb(12, 147, 209);">Overview</h6>
		<table class="uk-table">
			 @if(count($destination) > 0)
			<tr><th class="uk-text-bold"><span uk-icon="icon:location;ratio:0.75;"></span> Destinations</th><td>
				{{count($destination)}}

			 </td></tr>
			<tr><th class="uk-text-bold"><span uk-icon="icon:calendar;ratio:0.75;"></span> Total Days</th><td>{{$totaldays}} days</td></tr>
			<tr><th class="uk-text-bold"><span uk-icon="icon:credit-card;ratio:0.75;"></span> Total Cost</th><td>${{$totalcost}} + adventure</td></tr>
			<tr><th class="uk-text-bold"><span uk-icon="icon:heart;ratio:0.75;"></span> Adventures</th><td>{{$advents}}</td></tr>
			@endif

		</table>
		<p><a href="statusbooked"><button class="uk-button-default uk-button btn-global hidebtn1" style="border-radius: unset;" >Confirm Booking</button></a></p>
	</div>
</div>
</div>


<!-- This is the modal with the outside close button -->


<!-- This is the modal with the default close button -->
<div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <div id="desti" style="background:;display: none;">Selected Destinations:: </div>



            <?php if(isset($_SESSION['sessname']))
            { $_SESSION['sessname'];}
            ?>


            <form action="planner"  method="" class="uk-text-center uk-float-left" id="destform" >
            	<caption>Add More Destination/s!</caption>
                @csrf
                <div class="uk-margin">
                    <label for="dest" class="uk-text-center uk-width-1-1">Choose Destination/s</label> <br>
                    <select class="uk-input uk-form-width-large" type="text"  name="dest" id="selectitem"  >
                          <option>Select destination</option>
                        @foreach($alld as $similartitle)

                        <option value="{{ $similartitle -> head  }}">{{ $similartitle -> head }}</option>



                        @endforeach
                    </select>
                    <input type="text" id="semail" name="session" value="<?php echo $_SESSION['sessname'] ?> " hidden >
                  </div>
                  <button class="uk-button uk-button-default btn-global">Create</button>
              </form>
          </div>
    </div>
    <div style="height: 300px;width:100%;"></div>


<!-- Modal for adventure -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Add Adventure Nearby Selected Destination</h2>
        <form action="addDestination" method="get">
        	@csrf
        	<select name="adventure" id="seladv">
        		<option> Select Adventures</option>
        		@foreach($seladv as $adv)
        		<option value="{{$adv-> adventure}}">{{$adv-> adventure}}</option>
        		@endforeach
        	</select>
        	<input type="text" id="semail" name="session" value="<?php echo $_SESSION['sessname'] ?> " hidden >
        	<button class="uk-button btn-global" type="submit" >Save</button>
        </form>


        </p>
    </div>
</div>
















<script>
	// $(document).ready(function(){

			$('#selectitem').change(function(){


                // $(".a").css("display","block");
                 //$("#desti").css("display","block");

                var vals=$("#selectitem").val();
               var sname=$("#semail").val();



     $.ajax({
        type: "POST",
        url: "create",
        data: {seldest:vals,sessname:sname, _token: '{{csrf_token()}}'},
        success: function(){
        	alert(vals + "and" + sname);
        },
    });
 });
	// });
</script>

@include('layout.footer')
