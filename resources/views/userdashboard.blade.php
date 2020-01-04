<meta name="csrf-token" content="{{ csrf_token() }}" />
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <!-- Make sure you put this AFTER Leafl+et's CSS -->
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




</head>
<body onload="UIkit.notification({message: '<span uk-icon=\'icon: check\' class=\'uk-success\'></span> Make your plan yourself! Enjoy!',status:'success'})">
@include('layout.header')

<div class="uk-position-relative" id="u-d">
    <div class="userdashboardbanner ">

       <div class="userdashboardbox uk-container">
        <div class="uk-section uk-margin-large-top">
            <div class="uk-grid">
              <div class="uk-width-2-3"  id="userbooking" >
                <h2 class="uk-text-center uk-light">Create your own Destination!!</h2>
                <p class="uk-text-center" style="padding: 0 30%;">Be free to select destination and create own itinerary. Make your plan impressive and cheering!!</p>
                <span uk-icon="icon:  chevron-double-right; ratio: 2" class="iconslider"></span>
                <p  class="uk-text-center">
                <a href="planner"><button class="uk-button-default uk-button btn-global uk-margin-large-top">View Saved</button></a>
                </p>

              </div>

                <div class="uk-card-large uk-width-1-3" style="background-color:white;padding: 20px !important;">

            <h2 class="uk-text-center" style="color: rgb(12, 147, 209)">Book Your Trip</h2>

<div id="desti" style="background:;display: none;">Selected Destinations:: </div>






            <form action="planner"  method="get" class="uk-text-center uk-float-left" id="destform" >
                @csrf
                <div class="uk-margin">
                 <style type="text/css">#destform input{color:blue;}</style>

                    <label for="dest" class="uk-text-center uk-width-1-1">Choose Destination/s</label> <br>
                    <select class="uk-input uk-form-width-large" type="text"  name="dest" id="select"  >
                          <option>Select destination</option>
                        @foreach( $option as $options )

                        <option value="{{ $options -> head }}">{{ $options -> head }}</option>



                        @endforeach
                    </select>
                    <input type="text" hidden id="email" name="session" value="<?php echo $_SESSION['sessname'] ?> " >
                  </div>

                  <button class="uk-button uk-button-default btn-global">Create</button><br>
                  <small>Just add single destination if you donot have much idea on the destination name! You can add nearby destinations later!</small>
              </form>
          </div>
                <!-- //here from user booking -->
                <script type="text/javascript">

                </script>

            </div>

       </div>
       </div>

    </div>
    <div class="uk-position-top">
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

        <nav class="uk-navbar-container uk-navbar-transparent userdashboardnavbar" uk-navbar>
            <div class="uk-navbar-left navbar-left">

                <a class="uk-navbar-item uk-logo" href="/"><h3>Travel</h3></a>

            </div>

            <div class="uk-navbar-right uk-visible@l">

                <div class="uk-navbar-item">
                    <form class="uk-search uk-search-navbar userdashboardsearch">
                        <span uk-search-icon></span>
                        <input class="uk-search-input " type="search" placeholder="Search...">
                    </form>
                </div>

            </div>
            <div class="uk-navbar-right">
              <?php $server=mysqli_connect('localhost','root','','gbridge');
                    $sess=$_SESSION['sessname'];
                    $countsaved="SELECT * from testingjs where bookedby='$sess' and status='1'";
                    $countsavedq=mysqli_query($server,$countsaved);
                    $countsaved1="SELECT * from testingjs where bookedby='$sess' and status='0'";
                    $countsavedq1=mysqli_query($server,$countsaved1)
                    ?>
                <ul class="uk-navbar-nav navbar-drop  uk-visible@l">
                    <!-- <li><a href="#">My Plan</a></li>
                    <li><a href="#">Saved</a></li> -->
                     <li><a   href="planner" uk-icon="icon: cart;ratio:1.5" style="padding: 5px 2px !important;" id="noti">

                        <sup>
                            <span class="uk-badge">
                                   <?php



                    if(!$countsavedq){
                        return view('error');
                      }
                    else{
                    $row1=mysqli_num_rows($countsavedq1);
                    if($row1>0){

                    echo $row1;}

                else
                    {echo "0";}

            }

                    ?>

                            </span>
                        </sup>



                    </a></li>
                   <?php
                    $row=mysqli_num_rows($countsavedq);
                   if($row>0){
                    ?>
                    <li><a href="thankyou">Booked</a></li>



                    <?php
                   } else{
                   } ?>
                    <ul class="uk-navbar-nav navbar-drop">
                        <li><a href="#" style="color:white !important;text-transform:lowercase !important;"><b><?php

                        if(isset($_SESSION['sessname'])) {
  echo $_SESSION['sessname'];} ?>


                            </b></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <!-- <li><a href="#">MY Account</a></li> -->
                                    <li><a href="logout">Logout</a></li>

                                </ul>
                            </div>
                        </li>

                    </ul>
                    <li><a href="#">faq</a></li>

                </ul>


                <a class="uk-navbar-toggle uk-hidden@l uk-toggle "uk-toggle href="#mobilemenu">
                    <span uk-navbar-toggle-icon></span>
                </a>
            </div>
        </nav>
        <hr style="opacity: .4;">
    </div>
</div>

</div>

{{--mobile nav userdashboard--}}
<div id="mobilemenu" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>


        <ul class="uk-nav uk-nav-default mobilenav">
            <div class="uk-margin">
                <form class="uk-search uk-search-default mobilenav-input" href="#modal-full" uk-toggle>
                    @csrf
                    <span class="uk-search-icon-flip" uk-search-icon></span>
                    <input class="uk-search-input" type="search" placeholder="Search...">
                </form>
            </div>


            <!-- <li><a href="#">My Plan</a></li>
            <li><a href="#">Saved</a></li> -->


            <ul class="uk-navbar-nav navbar-drop">
                <li><a href="#">Abi</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <!-- <li><a href="#">MY Account</a></li> -->
                            <li><a href="logout">Logout</a></li>

                        </ul>
                    </div>
                </li>

            </ul>
        </ul>
    </div>
</div>



{{--end of userdashboard--}}


<div class="uk-container">







<div class="uk-grid">





 <div class="uk-section uk-width-2-3@m" id="userdashboardsection">
<style type="text/css">
    #mapid { height: 300px;width: 100%; }
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






<!--
  <div id="mapid">
   <h4  class="uk-position-top-center" style="z-index: 555;background: rgba(255,255,255,.6);top:2px;">Selected Destination View</h4>
  </div> -->
 </div>

<!--     <div class="uk-section" id="userdashboardsection">



        </div>

 -->


 <script type="text/javascript">
 $(document).ready(function(){


    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        $('#select').change(function(){


                // $(".a").css("display","block");
                 $("#desti").css("display","block");

                var vals=$("select").val();
               var sname=$("#email").val();

// alert(vals);

     $.ajax({
        url: 'create',
        type: 'GET',
        data: {
            seldest:vals,
            sessname:sname
            },
        success:function  (){
            alert(vals);
        }
    });


  setInterval(function(){
$("#desti").load('desti');
}, 2000);


;

  $("#userbooking").load('booked');


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


                                        $("#userbooking").load("booked");













                                    }

                                });






                                });









           $(document).on('click','.day',function(event){

            event.stopPropagation();
    event.stopImmediatePropagation();


    $(document).on('change', '.day', function () {
   // var subtotal = 0;
   event.stopPropagation();
    event.stopImmediatePropagation();
    $('.clickedRow').each(function() {
        var itema = $(this).find(".day").val();
        var itemb = $(this).find(".destis").val();
        //subtotal += quantity * price;

   $.ajax({
                                      url: 'duration',
                                      type: 'GET',


                                      data: {
                                        'dayss': itema,
                                        'desti':itemb,

                                      },
                                      success: function(response){

                                          $("#userbooking").load("booked");



}


                                });



    });

});


});







})


</script>





                </div>
                  </div>




                  <!-- required part for itinerary -->

                 {{-- <div class="uk-margin">
                    <label for="duration">Duration</label> <br>
                    <select class="uk-select uk-form-width-large" name="duration">

                        <option value="7">1-7 days</option>
                        <option value="12">8-12 days</option>
                        <option value="18">13-18 days</option>
                        <option value="21">19-21 days</option>
                    </select>
                </div>


                <div class="uk-margin">
                    <label for="adv">Adventures</label> <br>
                    <select class="uk-select uk-form-width-large" name="adv">
                        <option value="Heli Tour">Heli Tour</option>
                        <option value="Hunting">Hunting</option>

                         <option value="Boating">Boating</option>
                        <option value="Rafting">Rafting</option>
                        <option value="Bunjee">Bunjee</option>
                        <option value="Canyoing">Canyoing</option>
                        <option value="Canoning">Canoning</option>
                        <option value="Paragliding">Paragliding</option>
                        <option value="Jungle Safari">Jungle Safari</option>
                         <option value="Elephant Safari">Elephant Safari</option>

                    </select>
                </div>


        <div class="uk-margin">
                    <label for="pax">Pax</label> <br>
                  <input class="uk-input uk-form-width-large" type="number" name="pax"></div>

<div class="uk-margin">
                    <label for="arrival">Arrival Date</label> <br>
                  <input class="uk-input uk-form-width-large" type="date" id="" name="arrival" ></div>



{{--                <div class="uk-margin">--}}
{{--                    <div>--}}
{{--                        <a href="" uk-toggle="target: #toggle-usage" uk-icon="icon: chevron-down"> ACTIVITY PREFERENCES (OPTIONAL)</a>--}}
{{--                        <p id="toggle-usage" hidden>What's up?</p>--}}
{{--                    </div>--}}
{{--                </div>--}}



                {{-- <div class="uk-margin">
                    <button class="uk-button uk-button-default btn-global" type="submit" name="book">Done</button>
                </div>

            </form>

        </div>

 -->




        </div>




    </div> --}}
{{-- </div> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/js/flatpickr.js"></script>


<script>


    $(".basicDate").flatpickr({

        dateFormat: "F, d Y",
        disableMobile: "true",

        mode: 'range'
        // dateFormat: "Y-m-d"
    });

</script>




<div class="uk-container-fluid footer">


    <div class="uk-container">

        <div class="uk-section">

            <div class="uk-text-left footer-content" uk-grid>
                <div class="uk-width-1-4@m">
                    <h4>TripMe</h4>
                    <div class="uk-list">
                        <li>About </li>
                        <li>Partner with us</li>
                        <li>Inspirock on LinkedIn</li>


                    </div>
                </div>

                <div class="uk-width-1-4@m">
                    <h4>Help</h4>
                    <div class="uk-list">
                        <li>FAQ</li>
                        <li>Contact us</li>
                        <li>Privacy policy</li>
                        <li>Cookie policy</li>
                        <li>Copyright policy</li>
                        <li>Terms of use</li>


                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <h4>What’s On?</h4>
                    <div class="uk-list">
                        <li>Gai Jatra</li>
                        <li>Krishna Ashtami</li>
                        <li>View All</li>


                    </div>
                </div>

                <div class="uk-width-1-4@m">
                    <h4>Social Media</h4>

                    <div class="social-icon">
                        <span class="social-1"><a href="" uk-icon="icon:facebook"></a></span>
                        <span class="social-2 uk-margin-small-left"><a href="" uk-icon="icon:youtube"></a></span>
                        <span class="social-3 uk-margin-small-left"><a href="" uk-icon="icon: instagram"></a></span>
                    </div>

                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae non amet esse sit maiores tempora nesciunt deserunt nulla quos consectetur impedit, blanditiis ratione illo asperiores incidunt praesentium veniam. Obcaecati, fugiat.</p>
                </div>


            </div>



            <hr>
            <p class="uk-text-center">
                © 2019 TripMe - All rights reserved
            </p>
        </div>
    </div>
</div>



<!-- modal -->
  <div id="user-infomodal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">


        <h2 class="uk-modal-title">



        </h2>

        <div class="uk-container">
          <div class="usermodalleft uk-float-left">
            <h4>Name</h4>
            <h5>Email</h5>
          </div>
  <div class="usermodalleft uk-float-right">
            <img src="" alt="userphoto">
          </div>
          <div class="uk-clearfix">

        </div>

        <div class="usermodaldetail">
          <h5 class="uk-text-center">
            Detail
          </h5>

          <ul class="uk-list">
            <li>Arrival Date: <span>7 <sup>th</sup> june,2019</span></li>
            <li>Select Destination :<span> Kathmandu,</span> <span> Pokhara</span></li>
            <li>Address:<span>123 crossstreet ,London</span></li>
            <li>Passport No: <span>0123456789</span></li>

          </ul>

        </div>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">close</button>

        </p>
    </div>


</div>
</div>

@include('layout.footer')
