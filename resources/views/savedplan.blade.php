
@include('layout.header')
</head>
<body>

    
<div class="uk-position-relative">
    <div class="userdashboardbanner ">

       <div class="userdashboardbox uk-container uk-position-center uk-text-center">
           <h1>The new way  plan your next trip</h1>
           <p>Create a fully customized
               day-by-day itinerary for free</p>
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
                <ul class="uk-navbar-nav navbar-drop  uk-visible@l">
                    <!-- <li><a href="#">My Plan</a></li>
                    <li><a href="#">Saved</a></li> -->
                     <li><a   href="userdashboard" uk-icon="icon: cart;ratio:1.5" style="padding: 5px 2px !important;" id="noti">
                       
                        <sup>
                            <span class="uk-badge">
                                   <?php 
                
                    $server=mysqli_connect('localhost','root','','gbridge');
                    $sess=$_SESSION['sessname'];
                    $countsaved="SELECT * from bookedings where bookedby='$sess'";
                    $countsavedq=mysqli_query($server,$countsaved);

                    if(!$countsavedq){
                        echo "nothing".mysqli_error($server);
                    }
                    else{
                    $row=mysqli_num_rows($countsavedq);
                    if($row>0)
                    echo $row;
                else
                    echo "0";

            }

                    ?>

                            </span>
                        </sup>


                      
                    </a></li>
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



{{--end of userdashborar--}}


<div class="uk-container">


    <div class="uk-section" id="userdashboardsection">
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h2 class="uk-text-center">Saved Plans</h2>

          
  

<div class="uk-grid">
       @if (count($savedone)>0)
     @foreach ($savedone as $saved)

    <div>
          
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-media-top">
        
                <?php 

                 ?>
                <center>
                    <img src="image/destination/{{$saved -> feat}}" alt="{{$saved -> destination}}" style="height: 180px">
                </center>

           
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title"> <a href="detail?post_name={{ $saved -> destination}}&post_id={{ $saved -> postid}}">
                    
                    {{$saved -> destination}}
                </a></h3>
              
            </div>
        </div>
    </div>
     @endforeach
     @else
        Nothing saved! Create one to view here!!
     @endif

    </div>
</div>

        
    
           <!-- 

ITITEnrary
            <form action=""  method="" class="uk-text-center" >
                <div class="uk-margin">
                    <select class="uk-input uk-form-width-large" type="text" placeholder="Enter destination(Country,Region,City)">
                        <option></option>
                    </select>
                </div>

                <div class="uk-margin">
                    <select class="uk-select uk-form-width-large">
                        <option>Duration</option>
                        <option>1-7 days</option>
                        <option>8-12 days</option>
                        <option>13-18 days</option>
                        <option>19-21 days</option>
                    </select>
                </div>
                <div class="uk-margin">
                   <input type="number" name="pax" placeholder="No. of People">
                </div>
                             <div class="uk-margin">
                 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script src="/js/flatpickr.js"></script>


<script>


    $(".dateinline").flatpickr({

        dateFormat: "F, d Y",
        disableMobile: "true",
         inline:'true'
        // dateFormat: "Y-m-d"
    });

</script>
                </div>


                <div class="uk-margin">
                 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script src="/js/flatpickr.js"></script>


<script>


    $(".dateinline").flatpickr({

        dateFormat: "F, d Y",
        disableMobile: "true",
         inline:'true'
        // dateFormat: "Y-m-d"
    });

</script>
                </div>


                <div class="uk-margin">
                    <select class="uk-select uk-form-width-large">
                        <option>Activity</option>
                        <option>Advanture</option>
                        <option>Bird watching</option>
                        <option>cycling</option>
                        <option>expedition</option>
                        <option>jungle safari</option>
                        <option></option>
                    </select>
                </div>






{{--                <div class="uk-margin">--}}
{{--                    <div>--}}
{{--                        <a href="" uk-toggle="target: #toggle-usage" uk-icon="icon: chevron-down"> ACTIVITY PREFERENCES (OPTIONAL)</a>--}}
{{--                        <p id="toggle-usage" hidden>What's up?</p>--}}
{{--                    </div>--}}
{{--                </div>--}}



                <div class="uk-margin">
                    <button class="uk-button uk-button-default btn-global" type="submit">See your plan</button>
                </div>

            </form> -->

        </div>




    </div>
</div>


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


@include('layout.footer')
