@include("layout.header")

</head>


<body>


<div class="uk-position-relative">
    <!-- slider -->
   @foreach ($views as $selid)
    <div class="userdashboard" style="  background:linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),url(image/destination/{{$selid -> feat}});
    width: 100%;
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
  background-position: center">


        <div class="userdashboardbox uk-container uk-position-center uk-text-center">
            <h1>Beautiful {{$selid -> head}}!</h1>
            <p>Create a fully customized
                day-by-day and Enjoy the Trip!!</p>
                <a href="">
                    <button class="uk-button uk-button-default  btn-global">Book Trip</button>
                </a>
        </div>
    </div>
   @endforeach
    <div class="uk-position-top">

        <nav class="uk-navbar-container uk-navbar-transparent header uk-container-fluid" uk-navbar>

            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href="#">+1 1235 6789 10</a></li>
                    <li><a href="#">info@tourandtravel.com</a></li>


                </ul>
            </div>

            <!-- <div class="uk-navbar-right uk-margin-large-right">
                <ul class="uk-navbar-nav uk-padding-small">
                    <li><a href="" uk-icon="icon: facebook"></a></li>
                    <li><a href="" uk-icon="icon: twitter"></a></li>
                    <li><a href="" uk-icon="icon: youtube"></a></li>
                    <li><a href="" uk-icon="icon: instagram"></a></li>
                </ul>
            </div> -->

            <div class="uk-navbar-right header-right uk-margin-medium-right">
                <select class="uk-select">
                    <option>EN</option>
                    <option>GR</option>
                </select>

            </div>

        </nav>



        <div class="headerborder" style="border:1px solid white"></div>
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">

            @include("layout.navbar")
        </div>


        <div id="modal-full" class="uk-modal-full uk-modal modal-search " uk-modal>
            <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle  search-modal" uk-height-viewport>
                <button class="uk-modal-close-full" type="button" uk-close></button>
                <form class="uk-search uk-search-large">
                    <input class="uk-search-input uk-text-center search-modal-text" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
        </div>


    </div>
</div>

<!-- end of navbar -->


<div class="uk-container">

    <div class="uk-section">




        <div class="uk-grid event-box">

            <div class="uk-width-3-4@m   eventmaincontent " >







<ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade" style="border-bottom: 2px solid lightblue;padding-bottom: 5px;">
    <li><a href="#">Overview</a></li>
    <li><a href="#">Description</a></li>
    <li><a href="#">Itinerary</a></li>
    <li><a href="#">Gallery</a></li>
</ul>
<ul class="uk-switcher uk-margin">
     @foreach($views as $selid)
    <li>









                            <div class="overview-box">
                                <h3 class="uk-card-title">
                                  {{$selid -> head}}
                                </h3>
                                <p> <b>Lie at :</b> {{$selid -> location}}.</p>
                                 <p> <b>At</b> {{$selid -> altitude}}m height.</p>
                                  <p> <b>Attractions:</b> {{$selid -> attraction}}.</p>

                                 <p> <b>Local things to feel:</b> {{$selid -> local}}.</p>
                                  <p> <b>Can do:</b> {{$selid -> cando}}.</p>
                                   <p> <b>Duration of trip:</b> {{$selid -> duration}}  days.</p>

                               <p> <?php
                if(isset($_SESSION['sessname'])){?>
<a class="uk-button uk-button-default btn-global" href="/userdashboard?post_name={{ $selid -> head }}&post_id={{ $selid -> id }}">Book Now</a>

<?php
}
else{?>
    <a class="uk-button uk-button-default btn-global " href="/login">Book Now</a>

    <?php
}
?></p>

                            </div>




            </li>
            @endforeach




    <li>


       @foreach($views as $selid)
                   <p> <b>Description:</b> <br> {{$selid -> description}}</p>
            @endforeach
    </li>
    <li>  @foreach($views as $selid)
                   <p> <b>Itinerary:</b> <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  <br>
                   Duis aute irure dolor in reprehenderit in voluptate velit esse
                   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            @endforeach</li>
     <li>

        @foreach ($detgall as $gall)

        <img src="image/destination/{{ $gall -> image }}" height="300px" width="420px">
        @endforeach

     </li>


</ul>

 <!-- @foreach ($same as $similar)
 <h1>{{$similar -> head}}</h1>
 @endforeach
 -->


 <h2 class="header-title"> <span class="header-title-span">Similar</span> <br>
                DESTINATIONS</h2>

<div class="uk-child-width-1-3@m" uk-grid>
 @foreach ($same as $similar)
    <div>
{{--        <div class="uk-card uk-card-default">--}}
{{--           <h2 class="uk-card-title " style="font-size: 16px !important;font-weight: bold;">{{$similar -> head}}</h2>--}}
{{--            <div class="uk-card-media-top">--}}
{{--              <img src="image/destination/{{$similar -> feat}}" style="height: 180px !important;width: 100% !important;">--}}
{{--            </div>--}}
{{--            <div class="uk-card-body " style="height: unset !important;">--}}

{{--              <a href="detail?post_name={{$similar -> head}}&post_id={{$similar -> id}}" ><button class="uk-button-default btn-global uk-button ">View More</button>--}}
{{--  </a>--}}
{{--            </div>--}}
{{--        </div>--}}



        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="image/destination/{{$similar -> feat}}" height="151px" alt="">
            </div>
            <div class="uk-card ">
                <div class="uk-margin-small">

                    <h4 class="uk-text-medium uk-text-center uk-text-bold uk-padding-small uk-margin-medium-bottom" style="font-size: 16px">
                        {{$similar -> head}}
                    </h4>

<div class="uk-clearfix"></div>

                    <a class="uk-button uk-button-default btn-global uk-text-center" href="detail?post_name={{$similar -> head}}&post_id={{$similar -> id}}">View More</a>

                </div>
            </div>
        </div>




    </div>
      @endforeach
+  </div>


<!-- <div class="uk-card uk-card-default uk-card-small">

 @foreach ($same as $similar)
 <a href="detail?post_name={{$similar -> head}}&post_id={{$similar -> id}}">
 <h2>{{$similar -> head}}</h2>
 </a>
 <img src="image/destination/{{$similar -> feat}}" height="180px" width="230px">
 <a href="detail?post_name={{$similar -> head}}&post_id={{$similar -> id}}"><button class="uk-button-default btn-global">View More</button>
  </a>
 @endforeach
  <img src="">

</div>
 -->
            </div>


            <div class="uk-width-1-4@m  eventsidecontent">


    <!--          <div id="card" style="width: 100px;height: 200px">
  <div class="front uk-card-default uk-card-body">
  <h2>hello</h2>
  </div>
  <div class="back  uk-card-default uk-card-body">
   <h2>hello</h2>
  </div>
</div>
 -->

 <div id="card">

                <div class="destination-package-box  uk-card-default front"  style="clip-path: polygon(50% 0%, 99% 0, 100% 75%, 50% 100%, 0% 75%, 0 0);
                background: #03A9F4; width: 100%;height: 400px">
                 <div class="front" >
                  @foreach($packages as $package)

                  <h1 class="uk-text-center" style="color:white;font-size: 70px;padding: 0px !important;"> <sup style="font-size: 22px;color:black;margin-top: ">$</sup> {{ $package -> costperday }} <sub style="font-size: 18px;margin-top: -100px !important;color: black;">per day</sub></h1>
                  <p class="uk-text-center" style="color: white;font-size: 24px;">{{ $package -> duration }} DAYS


</p>
                  <p class="uk-text-center" style="color: white;font-size: 18px;"><b style="color:black;font-size: 20px;">Destination Type</b><br>
                   {{ $package -> dtype }}
                  @endforeach

            </div>
                </div>
                    <div class="back">
                      <p style="clip-path: polygon(50% 0%, 99% 0, 100% 75%, 50% 100%, 0% 75%, 0 0);
                background: #03A9F4; width: 100%;height: 400px">
                       @foreach($views as $selid)

                       <?php
                if(isset($_SESSION['sessname'])){?>
<a href="/userdashboard?post_name={{ $selid -> head }}&post_id={{ $selid -> id }}"><button class="uk-button uk-button-default btn-global ">Book Now</button></a>

<?php
}
else{?>
   <a href="/login"> <button class="uk-button uk-button-default btn-global ">Book Now</button></a>


    <?php
}
?>
                      <!--  <button class="uk-button-default btn-global uk-button ">Book Now</button> -->

                       @endforeach


                       </p>
                    </div>


</div>

                <h4 class="uk-heading-divider">Top Destination</h4>

                <ul class="uk-list">
                    <li><a href="#">Everst Region</a></li>
                    <li><a href="#">Annapurna Region</a></li>
                    <li><a href="#">Kathmandu Tour</a></li>
                    <li><a href="">Bhaktapur Tour</a></li>
                    <li><a href="">Chitwan National Park</a></li>
                </ul>

            </div>

        </div>
    </div>

</div>



















@include("layout.footer")
